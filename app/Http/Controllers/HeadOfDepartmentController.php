<?php

namespace App\Http\Controllers;

use App\headofdepartments;
use Illuminate\Http\Request;

class HeadOfDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hod = HeadOfDepartments::all();
        return view ('headofdepartment.index', compact ('hod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('headofdepartment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hod = new HeadOfDepartments;
        $hod ->first_name = $request ->first_name;
        $hod ->middle_name = $request ->middle_name;
        $hod ->gender = $request->gender;
        $hod ->marital_status= $request->marital_status;
        $hod ->dob= $request->dob;
        $hod->departments= $request->departments;
        $hod->mobile_phone= $request->mobile_phone;
        $hod->email= $request->email;
        $hod->notes= $request->notes;
        $hod->address= $request->address;
        $hod->save();

        return redirect (route('headofdepartment.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
