<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Mention\Mention;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.course.index');
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
            'fee' => '',
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
                $category_image = $course_image . '.' . $extension;

                $request->file('image')->move(public_path('media/course'), $course_image);

                $data['image'] = $course_image;
            }

            Course::create($data);
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
    public function show(string $id)
    {
        return view('admin.course.edit');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.course.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
