<?php

namespace App\Http\Controllers;

use App\Followup;
use App\Member;
use App\FollowupCategory;
use App\HeadOfDepartments;

use Illuminate\Http\Request;

class FollowupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member= Member::all();
        $followup= Followup::all();
        $followupcat = FollowupCategory::all();
        $hod = HeadOfDepartments::all();
        return view ('followup.index', compact ('followup', 'member', 'followupcat', 'hod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $member= Member::all();
        $followup= Followup::all();
        $followupcat = FollowupCategory::all();
         $hod = HeadOfDepartments::all();
        return view ('followup.create', compact ('followup', 'member', 'followupcat', 'hod'));
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request->all;
        // $this->validate ($request, [
        //     'name'=>'required',
        //     ]);

        //     $followup = new Followup;
        //     $followup ->member_id = $request->member_id;
        //     $followup ->follow_up_category_id =$request->follow_up_category_id;
        //     $followup ->hod_id =$request->hod_id;
        //     $followup->notes =$request->notes;
        //     $followup->save();

        //     return redirect (route('followup.index'));
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
