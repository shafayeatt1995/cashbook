@extends('layouts.master')

@section('title','Edit Balance')

@push('css')

@endpush

@section('content')
    <div class="row clearfix">
        <div class="card">
            <div class="header">
                <h2>Add Balance</h2>
            </div>
            <div class="body">
                <form action="{{ route('earning.update',$earning->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="col-md-3">
                        <h2 class="card-inside-title">Date</h2>
                        <div class="form-group">
                            <div class="form-line" id="bs_datepicker_container">
                                <input type="date" class="form-control" placeholder="Please choose a date..." name="date" value="{{ $earning->date }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="name">Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="name" class="form-control" value="{{ $earning->name }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="name">Enter Income Ammount</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" name="income" class="form-control" value="{{ $earning->income }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="name">Enter Expense Ammount</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" name="expense" class="form-control" value="{{ $earning->expense }}">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="name">Remarks</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="remarks" class="form-control" value="{{ $earning->remarks }}">
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <a href="{{ route('earning.index') }}" class="btn btn-danger waves-effect m-r-10"><i
                            class="material-icons">arrow_back</i> Back</a>
                    <button type="submit" class="btn btn-primary waves-effect pull-right">Submit <i
                            class="material-icons">done</i></button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
