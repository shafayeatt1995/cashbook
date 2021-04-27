<?php

namespace App\Http\Controllers;

use App\Earning;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class EarningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $earnings = Earning::latest()->get();
        return view('earning.index',compact('earnings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('earning.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($request->income)){
            $this->validate($request,[
                'date'=>'required',
                'name'=>'required',
                'remarks'=>'required',
                'income'=>'required',
            ]);

        }else{
            $this->validate($request,[
                'date'=>'required',
                'name'=>'required',
                'remarks'=>'required',
                'expense'=>'required',
            ]);
        }

        $earning = new Earning();
        $earning->date = $request->date;
        $earning->name = $request->name;
        $earning->income = $request->income;
        $earning->expense = $request->expense;
        $earning->remarks = $request->remarks;
        $earning->balance = $request->income - $request->expense;
        $earning->save();
        if (isset($request->income)){
            Toastr::success('Income Added Successfully', 'Success');
        }else{
            Toastr::success('Expese Added Successfully', 'Success');
        }

        return redirect()->route('earning.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Earning  $earning
     * @return \Illuminate\Http\Response
     */
    public function show(Earning $earning)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Earning  $earning
     * @return \Illuminate\Http\Response
     */
    public function edit(Earning $earning)
    {
        return view('earning.edit',compact('earning'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Earning $earning
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Earning $earning)
    {
        if (isset($request->income)){
            $this->validate($request,[
                'date'=>'required',
                'name'=>'required',
                'remarks'=>'required',
                'income'=>'required',
            ]);

        }else{
            $this->validate($request,[
                'date'=>'required',
                'name'=>'required',
                'remarks'=>'required',
                'expense'=>'required',
            ]);
        }

        $earning->date = $request->date;
        $earning->name = $request->name;
        $earning->income = $request->income;
        $earning->expense = $request->expense;
        $earning->remarks = $request->remarks;
        $earning->balance = $earning->balance + $request->income - $request->expense;
        $earning->save();
        if (isset($request->income)){
            Toastr::success('Income Added Successfully', 'Success');
        }else{
            Toastr::success('Expese Added Successfully', 'Success');
        }

        return redirect()->route('earning.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Earning  $earning
     * @return \Illuminate\Http\Response
     */
    public function destroy(Earning $earning)
    {
        //
    }
}
