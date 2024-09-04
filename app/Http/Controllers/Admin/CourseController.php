<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use League\CommonMark\Extension\Mention\Mention;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        return view('admin.course.create', compact('categories', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:courses|max:255',
            'category_id' => '',
            'mentor_id' => '',
            'start_date' => '',
            'fee' => 'required',
            'discount' => '',
            'total_class' => '',
            'total_days' => '',
            'status' => 'required',
            'image' => 'max:500|image|mimes:jpg,png,jpeg',
        ]);

        DB::beginTransaction();
        try {
            $data["slug"] = Str::of($request->name)->slug('-');
            if ($request->hasFile('image')) {

                $originName = $request->file('image')->getClientOriginalName();
                $course_image = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $course_image = $course_image . '.' . $extension;

                $request->file('image')->move(public_path('media/course'), $course_image);

                $data['image'] = $course_image;
            }

            $course = Course::create($data);
            $file_name = $course->name . '-' . $course->id . '.txt'; // Adding .txt extension to the file name
            $path = public_path('media/course/' . $file_name); // Appending file name to the path
            File::put($path, $request->description); // Creating the file with the content
            $file_name1 = $course->name . '-' . $course->id . '_module.txt'; // Adding .txt extension to the file name
            $path = public_path('media/course/' . $file_name1); // Appending file name to the path
            File::put($path, $request->course_moudle); // Creating the file with the content
            $code = 'LA00' . $course->id;
            $course->course_code = $code;
            $course->update();

            DB::commit();
            return response()->json(['status' => true, 'msg' => 'Course Created Successfully!', 'url' => route('course.index')]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => false, 'msg' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('admin.course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);
        $categories = Category::all();
        $mentors = User::where('type', 'Mentor')->get();
        return view('admin.course.edit', compact('course', 'categories', 'mentors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Course::find($id);
        $data = $request->validate([
            'name' => 'required|max:255|unique:courses,name,' . $id,
            'category_id' => '',
            'mentor_id' => '',
            'start_date' => '',
            'fee' => 'required',
            'discount' => '',
            'total_class' => '',
            'total_days' => '',
            'status' => 'required',
            'image' => 'max:500|image|mimes:jpg,png,jpeg',
        ]);

        DB::beginTransaction();
        try {
            $data["slug"] = Str::of($request->name)->slug('-');
            if ($request->hasFile('image')) {

                $originName = $request->file('image')->getClientOriginalName();
                $course_image = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $course_image = $course_image . '.' . $extension;

                $request->file('image')->move(public_path('media/course'), $course_image);

                $data['image'] = $course_image;
            }

            $course->update($data);
            $file_name = $course->name . '-' . $course->id . '.txt'; // Adding .txt extension to the file name
            $path = public_path('media/course/' . $file_name); // Appending file name to the path
            File::put($path, $request->description); // Creating the file with the content
            $file_name1 = $course->name . '-' . $course->id . '_module.txt'; // Adding .txt extension to the file name
            $path = public_path('media/course/' . $file_name1); // Appending file name to the path
            File::put($path, $request->course_moudle); // Creating the file with the content

            $course->update($data);
            DB::commit();
            return response()->json(['status' => true, 'msg' => 'Course Created Successfully!', 'url' => route('course.index')]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => false, 'msg' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
