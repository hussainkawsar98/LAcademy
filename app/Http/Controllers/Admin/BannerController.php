<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'body_text' => 'required',
            'pry_btn_text' => '',
            'pry_btn_link' => '',
            'snd_btn_link' => '',
            'snd_btn_link' => '',
            'image' => 'required',
        ]);

        DB::beginTransaction();
        try {
            if ($request->hasFile('image')) {
                $originName = $request->file('image')->getClientOriginalName();
                $banner_image = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $banner_image = $banner_image . '.' . $extension;

                $request->file('image')->move(public_path('media/banner'), $banner_image);

                $data['image'] = $banner_image;
            }

            Banner::create($data);
            DB::commit();
            return response()->json(['status' => true, 'msg' => 'Banner Created Successfully!', 'url' => route('banner.index')]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner = Banner::find($id);
        return view('admin.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $banner = Banner::find($id);
        $data = $request->validate([
            'title' => '',
            'body_text' => '',
            'pry_btn_text' => '',
            'pry_btn_link' => '',
            'snd_btn_link' => '',
            'snd_btn_link' => '',
            'image' => '',
        ]);

        DB::beginTransaction();
        try {
            if ($request->hasFile('image')) {
                deleteImage('media/banner', $banner->image);
                $originName = $request->file('image')->getClientOriginalName();
                $banner_image = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $banner_image = $banner_image . '.' . $extension;

                $request->file('image')->move(public_path('media/banner'), $banner_image);

                $data['image'] = $banner_image;
            }

            $banner->update($data);
            DB::commit();
            return response()->json(['status' => true, 'msg' => 'Update Successfully!', 'url' => route('banner.index')]);
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
        $banner = Banner::find($id);
        if (!is_null($banner)) {
            deleteImage('media/banner', $banner->image);
            $banner->delete();
            return response()->json(['status' => true, 'msg' => 'Delete Successfully!']);
        } else {
            return response()->json(['status' => false, 'msg' => 'Delete Fail!']);
        }
    }
}
