<?php

namespace App\Http\Controllers;

use App\Payroll;
use App\Setting;
use App\Staff;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::all();
         $settings = Setting::all();
        $payroll = Payroll::all();
        return view ('payroll.firstindex', compact ('payroll', 'settings', 'staff'));


        
        // return view ('payroll.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staff = Staff::all();
         $settings = Setting::all();
        $payroll = Payroll::all();
        return view ('payroll.create', compact ('payroll', 'settings', 'staff'));

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

        $payroll = new Payroll;
        $payroll ->date = $request ->date;
        $date = explode('-', $request->date);
        $payroll->year = $date[0];
        $payroll->month = $date[1];
        $payroll ->staff_id = $request ->staff_id;
        $payroll ->pay_amount = $request->pay_amount;
        $payroll ->payment_method= $request->payment_method;
        $payroll ->bank_name= $request->bank_name;
        $payroll->account_number= $request->account_number;
        // $payroll->save();
        dd($payroll);

        return redirect (route('payroll.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $settings = Setting::all();
        $staff = Staff::where('id', $id)->get();
        $payroll = payroll::where('id', $id)->get();
        dd($staff->toArray());
        // return view ('payroll.edit', compact('payroll', 'settings', 'staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $settings = Setting::all();
        $staff = Staff::where('id', $id)->get();
        $payroll = payroll::where('id', $id)->get();
        return view ('payroll.edit', compact('payroll', 'settings', 'staff'));
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
        $payroll = Payroll::find($id);
        $payroll ->date = $request ->date;
        $date = explode('-', $request->date);
        $payroll->year = $date[0];
        $payroll->month = $date[1];
        $payroll ->staff_id = $request ->staff_id;
        $payroll ->pay_amount = $request->pay_amount;
        $payroll ->payment_method= $request->payment_method;
        $payroll ->bank_name= $request->bank_name;
        $payroll->account_number= $request->account_number;
        $payroll->save();

        return redirect (route('payroll.index'));
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
