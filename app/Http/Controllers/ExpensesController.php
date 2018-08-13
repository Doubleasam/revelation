<?php

namespace App\Http\Controllers;

use App\Expense;
use App\ExpenseType;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expense= Expense::all();
        $expensetype= ExpenseType::all();
        return view ('expense.index', compact ('expense', 'expensetype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expense= Expense::all();
        $expensetype= ExpenseType::all();
        return view ('expense.create', compact ('expense', 'expensetype'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('photo')) {
            // $request->photo->store('public');
            $imageName= $request->photo->store('public');
        }
        
         $expense = new Expense;
        $expense->expense_type_id = $request->expense_type_id;
        $expense->amount = $request->amount;
        $expense->date =$request->date;
        // $expense->files =$request->files;
        $expense->notes =$request->notes;
        $expense->save();
        return redirect (route('expense.index'));
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
