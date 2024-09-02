<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Thana;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Str;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $districts = District::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.district.index', compact('districts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.district.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:districts|max:100',
        ]);

        DB::beginTransaction();
        try {
            District::create($data);
            DB::commit();
            return response()->json(['status' => true, 'msg' => 'District Created Successfully!', 'url' => route('district.index')]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => false, 'msg' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(District $district)
    {
        $thanas = Thana::where('district_id', $district->id)->get();
        return view('admin.district.show', compact('district', 'thanas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(District $district)
    {
        return view('admin.district.edit', compact('district'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $district = District::find($id);
        $data = $request->validate([
            'name' => 'max:100|required|unique:districts,name,' . $id,
        ]);

        DB::beginTransaction();
        try {
            $district->update($data);
            DB::commit();
            return response()->json(['status' => true, 'msg' => 'Update Successfully!', 'url' => route('district.index')]);
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
        $district = District::find($id);
        if (!is_null($district)) {
            foreach($district->thanas as $thana){
                $thana->delete();
            }
            $district->delete();
            return response()->json(['status' => true, 'msg' => 'Delete Successfully!']);
        } else {
            return response()->json(['status' => false, 'msg' => 'Delete Fail!']);
        }
    }
}
