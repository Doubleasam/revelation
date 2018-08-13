<?php

namespace App\Http\Controllers;

use App\PledgePayment;
use App\PaymentMethod;
use App\Pledge;
use Illuminate\Http\Request;

class PledgePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pledge = Pledge::all();
        $payment = PledgePayment::all();
        return view ('pledges.index', compact('payment', 'pledge'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $payment_method= PaymentMethod:: all();
        return view ('pledges.pledgepaymentcreate', compact('payment_method'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        // $pledge = Pledge::find($id);
        // $payment = new PledgePayment();
        // $payment->member_id= $request->member_id;
        // $payment->pledge_id= $id;
        // $payment->payment_method_id= $request->payment_method_id;
        // $payment->amount= $request->amount;
        // $payment->notes= $request->notes;
        // $payment->date= $request->date;
        // $date = explode('-', $request->date);
        // $payment->year = $date[0];
        // $payment->month = $date[1];
        // $payment->save();

        // return view ('pledges.index', compact('payment', 'pledge'));
    



        $payment = new PledgePayment();
        $payment->member_id= $request->member_id;
        $payment->pledge_id= $id;
        $payment->payment_method_id= $request->payment_method_id;
        $payment->amount= $request->amount;
        $payment->notes= $request->notes;
        $payment->date= $request->date;
        $date = explode('-', $request->date);
        $payment->year = $date[0];
        $payment->month = $date[1];
        $payment->save();

        return view ('pledges.index', compact('payment'));
       
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
