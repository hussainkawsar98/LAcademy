<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentRegController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function registration()
    {
        $districts = District::all();
        return view('website.registration', compact('districts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'designation' => '',
            'phone' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'district_id' => 'required',
            'thana_id' => 'required',
            'address' => 'required',
            'image' => 'max:500|image|mimes:jpg,png,jpeg',
        ]);

        DB::beginTransaction();
        try {
            $data['password'] = Hash::make($request->password);
            $data['type'] = 'Student';
            if ($request->hasFile('image')) {

                $originName = $request->file('image')->getClientOriginalName();
                $student_image = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $student_image = $student_image . '.' . $extension;

                $request->file('image')->move(public_path('media/users'), $student_image);

                $data['image'] = $student_image;
            }

            User::create($data);
            DB::commit();
            return response()->json(['status' => true, 'msg' => 'Registration Successfully!', 'url' => route('website.student')]);
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
        //
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
