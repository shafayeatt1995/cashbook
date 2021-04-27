<?php

namespace App\Http\Controllers;

use App\Expense;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = Expense::latest()->get();
        return view('expense.index',compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expense.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'name' => 'required',
            'ammount' => 'required',
        ]);

        $expense = New Expense();
        $expense->date = $request->date;
        $expense->name = $request->name;
        $expense->ammount = $request->ammount;
        $expense->remarks = $request->remarks;
        $expense->save();
        Toastr::success('Expense Added Successfully', 'Success');
        return redirect()->route('expense.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        return view('expense.edit',compact('expense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        $this->validate($request, [
            'date' => 'required',
            'name' => 'required',
            'ammount' => 'required',
        ]);

        $expense->date = $request->date;
        $expense->name = $request->name;
        $expense->ammount = $request->ammount;
        $expense->remarks = $request->remarks;
        $expense->save();
        Toastr::success('Expense Updated Successfully', 'Success');
        return redirect()->route('expense.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        //
    }
}
