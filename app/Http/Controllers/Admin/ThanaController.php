<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;
use App\Models\Thana;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Str;

class ThanaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $thanas = Thana::orderBy('created_at', 'DESC')->paginate(15);
        return view('admin.thana.index', compact('thanas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $districts = District::all();
        return view('admin.thana.create', compact('districts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:thanas|max:100',
            'district_id' => 'required',
        ]);

        DB::beginTransaction();
        try {
            Thana::create($data);
            DB::commit();
            return response()->json(['status' => true, 'msg' => 'Thana Created Successfully!', 'url' => route('thana.index')]);
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
    public function edit(Thana $thana)
    {
        $districts = District::all();
        return view('admin.thana.edit', compact('thana', 'districts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $thana = Thana::find($id);
        $data = $request->validate([
            'name' => 'required|unique:thanas,name,' . $id,
            'district_id' => 'required',
        ]);

        DB::beginTransaction();

        try {
            $thana->update($data);
            DB::commit();

            return response()->json(['status' => true, 'msg' => 'Update Successfully', 'url' => route('thana.index')]);
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
        $thana = Thana::find($id);
        if (!is_null($thana)) {

            $thana->delete();
            return response()->json(['status' => true, 'msg' => 'Delete Successfully!']);
        } else {
            return response()->json(['status' => false, 'msg' => 'Delete Fail!']);
        }
    }
    public function getThana(Request $request)
    {
        $district_id = $request->district_id;
        $thanas = Thana::where('district_id', $district_id)
            ->get();
        return view('admin.thana.raw', compact('thanas'));
    }
}
