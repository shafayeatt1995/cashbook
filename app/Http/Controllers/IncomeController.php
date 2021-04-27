<?php

namespace App\Http\Controllers;

use App\Income;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomes = Income::latest()->get();
        return view('income.index',compact('incomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('income.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'name' => 'required',
            'ammount' => 'required',
        ]);

        $income = New Income();
        $income->date = $request->date;
        $income->name = $request->name;
        $income->ammount = $request->ammount;
        $income->remarks = $request->remarks;
        $income->save();
        Toastr::success('Income Added Successfully', 'Success');
        return redirect()->route('income.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $income = Income::find($id);
        return view('income.edit',compact('income'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'date' => 'required',
            'name' => 'required',
            'ammount' => 'required',
        ]);

        $income = Income::find($id);
        $income->date = $request->date;
        $income->name = $request->name;
        $income->ammount = $request->ammount;
        $income->remarks = $request->remarks;
        $income->save();
        Toastr::success('Income Edit Successfully', 'Success');
        return redirect()->route('income.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
