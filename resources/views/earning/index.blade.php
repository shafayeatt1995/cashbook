@extends('layouts.master')

@section('title','Dashboard')

@section('content')
    <div class="block-header">
        <h2>DASHBOARD</h2>
    </div>

    <!-- Widgets -->
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">playlist_add_check</i>
                </div>
                <div class="content">
                    <div class="text">NEW TASKS</div>
                    <div class="number count-to" data-from="0" data-to="125" data-speed="15"
                         data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">help</i>
                </div>
                <div class="content">
                    <div class="text">NEW TICKETS</div>
                    <div class="number count-to" data-from="0" data-to="257" data-speed="1000"
                         data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-light-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">forum</i>
                </div>
                <div class="content">
                    <div class="text">NEW COMMENTS</div>
                    <div class="number count-to" data-from="0" data-to="243" data-speed="1000"
                         data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-orange hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">person_add</i>
                </div>
                <div class="content">
                    <div class="text">NEW VISITORS</div>
                    <div class="number count-to" data-from="0" data-to="1225" data-speed="1000"
                         data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Widgets -->

    <div class="row clearfix">
        <!-- Task Info -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>Balance</h2>
                    <a href="{{ route('earning.create') }}" class="btn btn-primary waves-effect pull-right"
                       style="margin-top: -29px"><i class="material-icons">add</i> Add</a>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                            <tr>
                                <th class="text-center">SL</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Remarks</th>
                                <th class="text-center">Income</th>
                                <th class="text-center">Expense</th>
                                <th class="text-center">Balance</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($earnings as $key=>$earning)
                                <tr>
                                    <td class="text-center">{{$key + 1}}</td>
                                    <td class="text-center">{{$earning->name}}</td>
                                    <td class="text-center">{{$earning->remarks}}</td>
                                    <td class="text-center">
                                        @if(isset($earning->income))
                                            {{$earning->income}}
                                        @else
                                            0
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if(isset($earning->expense))
                                            {{$earning->expense}}
                                        @else
                                            0
                                        @endif</td>
                                    <td class="text-center"></td>
                                    <td class="text-center">
                                        <a href="{{ route('earning.edit',$earning->id) }}" class="btn btn-warning"><i
                                                class="material-icons">edit</i> Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Task Info -->
        @endsection

        @push('js')

            <script src="{{ asset('backend/js/pages/index.js') }}"></script>
    @endpush
