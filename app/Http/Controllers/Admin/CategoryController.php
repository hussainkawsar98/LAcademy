<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::whereNull('parent_id')->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::whereNull('parent_id')
        ->get();
        return view('admin.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:categories|max:255',
            'status' => 'required',
            'image' => 'max:500|image|mimes:jpg,png,jpeg',
            'parent_id'=>'',
        ]);

        DB::beginTransaction();
        try {
            $data["slug"] = Str::of($request->name)->slug('-');
            if ($request->hasFile('image')) {

                $originName = $request->file('image')->getClientOriginalName();
                $category_image = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $category_image = $category_image . '.' . $extension;

                $request->file('image')->move(public_path('media/category'), $category_image);

                $data['image'] = $category_image;
            }

            Category::create($data);
            DB::commit();
            return response()->json(['status' => true, 'msg' => 'Course Created Successfully!', 'url' => route('category.index')]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => false, 'msg' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // $categories = Category::(!whereNull('parent_id'))
        // ->get();
        return view('admin.category.show', compact('category')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::whereNull('parent_id')
        ->get();
        $category = Category::find($id);
        return view('admin.category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $data = $request->validate([
            'name' => 'max:255|required|unique:categories,name,' . $id,
            'status' => 'required',
            'image' => 'max:500|image|mimes:jpg,png,jpeg',
            'parent_id'=>'',
        ]);

        DB::beginTransaction();
        try {
            $data["slug"] = Str::of($request->name)->slug('-');
            if ($request->hasFile('image')) {

                deleteImage('media/category', $category->image);
                $originName = $request->file('image')->getClientOriginalName();
                $category_image = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $category_image = $category_image . '.' . $extension;

                $request->file('image')->move(public_path('media/category'), $category_image);

                $data['image'] = $category_image;
            }

            $category->update($data);
            DB::commit();
            return response()->json(['status' => true, 'msg' => 'Update Successfully!', 'url' => route('category.index')]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => false, 'msg' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $id)
    {
        $category = Category::find($id);
        if (!is_null($category)) {
            foreach($category->childs as $child){
                deleteImage('media/category', $child->image);
            $child->delete();
            }
            deleteImage('media/category', $category->image);
            $category->delete();
            return response()->json(['status' => true, 'msg' => 'Delete Successfully!']);
        } else {
            return response()->json(['status' => false, 'msg' => 'Delete Fail!']);
        }
    }
}
