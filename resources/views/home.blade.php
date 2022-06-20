@extends('layouts.app')

@section('content')
<?php

use App\Models\Task;
$totaltask = count(Task::all());
$activetask = count(Task::all()->where('status','active'));

?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard - Home') }}</div>

                <div class="card-body">
                
                    <div class="row">
                        <div class="col-md-3 bg-info p-2">
                            <a href="{{route('home')}}" class="btn btn-light w-100 mb-2">Home</a>
                            <a href="{{route('register')}}" class="btn btn-light w-100 mb-2">Add New User</a>
                            <a href="{{route('addnewtask')}}" class="btn btn-light w-100 mb-2">Add New Task</a>
                            <a href="{{route('managetasks')}}" class="btn btn-light w-100 mb-2">Manage Tasks</a>
                        </div>
                        <div class="col-md-1">&nbsp;</div>
                        <div class="col-md-8">
                            <br>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="jumbotron bg-info text-white text-center">
                                        <h5>Total Tasks <br> <?php echo $totaltask; ?></h5>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    &nbsp;
                                </div>
                                <div class="col-md-5">
                                    <div class="jumbotron bg-info text-white text-center">
                                        <h5>Active Tasks <br> <?php echo $activetask; ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
