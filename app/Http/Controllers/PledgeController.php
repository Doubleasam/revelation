<?php

namespace App\Http\Controllers;


use App\Campaign;
use App\Member;
use App\Pledge;
use App\PledgePayment;
use App\Helpers;
use Illuminate\Http\Request;

class Pledgecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $member= Member::all();
        $campaign= Campaign::all();
        $pledge= Pledge::all();
        return view ('pledges.index', compact ('member', 'campaign', 'pledge'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member= Member::all();
        $campaign= Campaign::all();
        $pledge= Pledge::all();
        return view ('pledges.create', compact ('member', 'campaign', 'pledge'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pledge= new Pledge;
        $pledge->member_id = $request->member_id;
        $pledge->campaign_id = $request->campaign_id;
        $pledge->amount = $request->amount;
        $pledge->status = $request->status;
        $pledge->date = $request->date;
        $pledge->notes = $request->notes;
        $pledge->save();

        return redirect (route('pledge.index'));
        // return $request->all();
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
        $pledge = Pledge::where('id', $id)->get();
        return view ('pledges.edit', compact ('pledge'));
        


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
        Pledge::where('id', $id)->delete();
        return redirect (route ('pledge.index'));
    }
}
