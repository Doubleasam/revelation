<?php

namespace App\Http\Controllers;


use App\Member;
use App\Campaign;
use App\Pledge;
use App\Contribution;
use App\Fund;
use App\PaymentMethod;


use Illuminate\Http\Request;

class ContributionController extends Controller
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
        $contribution= Contribution::all();
        $fund= Fund::all();
        $payment_method= PaymentMethod::all();
        return view ('contribution.index', compact ('member', 'campaign', 'pledge', 'contribution', 'fund', 'payment_method'));
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
        $contribution= Contribution::all();
        $fund= Fund::all();
        $payment_method= PaymentMethod::all();
        return view ('contribution.create', compact ('member', 'campaign', 'pledge', 'contribution', 'fund', 'payment_method'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // return $request->all();

        $contribution = new Contribution;
        $contribution->member_id = $request->member_id;
        $contribution->amount = $request->amount;
        $contribution->date =$request->date;
        $contribution->fund_id =$request->fund_id;
        $contribution->payment_method_id =$request->payment_method_id;
        $contribution->notes =$request->notes;
        $contribution->save();
        return redirect (route('contribution.index'));
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
        // $contribution= Contribution::with('member', 'campaign', 'pledge', 'contribution', 'fund', 'payment_method')->where('id', $id)->first();
        // $member= Member::all();
        // $campaign= Campaign::all();
        // $pledge= Pledge::all();
        // $fund= Fund::all();
        // $payment_method= PaymentMethod::all();
        //  return view ('contribution.edit', compact ('member', 'campaign', 'pledge', 'contribution', 'fund', 'payment_method'))
        
        
        $contribution= Contribution::with('member', 'fund', 'payment_method')->where('id', $id)->first();
        // $contribution= Contribution::where('id', $id)->first(); 
        $member= Member::all();
        $fund= Fund::all();
        $payment_method= PaymentMethod::all();
        return view ('contribution.edit', compact ('member', 'contribution', 'fund', 'payment_method'));
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
        Contribution::where('id', $id)->delete();
        // return view ('contribution.index', compact('contribution'));
        return redirect (route ('contribution.index'));
        // return redirect()->back();

         // return $id;
    }
}
