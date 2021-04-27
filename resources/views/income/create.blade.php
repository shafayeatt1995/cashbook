@extends('layouts.master')

@section('title','Add Income')

@push('css')

@endpush

@section('content')
    <div class="row clearfix">
        <div class="card">
            <div class="header">
                <h2>Add Income</h2>
            </div>
            <div class="body">
                <form action="{{ route('income.store') }}" method="POST">
                    @csrf
                    <div class="col-md-3">
                        <h2 class="card-inside-title">Date</h2>
                        <div class="form-group">
                            <div class="form-line" id="bs_datepicker_container">
                                <input type="date" class="form-control" placeholder="Please choose a date..." name="date">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="name">Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="name">Enter Ammount</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" name="ammount" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="name">Remarks</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="remarks" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <a href="{{ route('income.index') }}" class="btn btn-danger waves-effect m-r-10"><i
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
