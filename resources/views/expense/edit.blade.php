@extends('layouts.master')

@section('title','Edit Expense')

@push('css')

@endpush

@section('content')
    <div class="row clearfix">
        <div class="card">
            <div class="header">
                <h2>Edit Expense</h2>
            </div>
            <div class="body">
                <form action="{{ route('expense.update',$expense->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-3">
                        <h2 class="card-inside-title">Date</h2>
                        <div class="form-group">
                            <div class="form-line" id="bs_datepicker_container">
                                <input type="date" class="form-control" placeholder="Please choose a date..." name="date" value="{{ $expense->date }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="name">Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="name" class="form-control" value="{{ $expense->name }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="name">Enter Ammount</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" name="ammount" class="form-control" value="{{ $expense->ammount }}" required>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="name">Remarks</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="remarks" class="form-control" value="{{ $expense->remarks }}">
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <a href="{{ route('expense.index') }}" class="btn btn-danger waves-effect m-r-10"><i
                            class="material-icons">arrow_back</i> Back</a>
                    <button type="submit" class="btn btn-primary waves-effect pull-right">Update <i
                            class="material-icons">done</i></button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
