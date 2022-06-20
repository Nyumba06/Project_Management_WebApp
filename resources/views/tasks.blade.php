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
                <div class="card-header">{{ __('Dashboard - Manage Tasks') }}</div>

                <div class="card-body">
                
                @if(session('Insert_Message'))
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" >&times;</button>
                <strong>Success!</strong>{{ session('Insert_Message') }}
                </div>
                @elseif(session('Update_Message'))
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" >&times;</button>
                <strong>Success!</strong>{{ session('Update_Message') }}
                </div>
                @elseif(session('Delete_Message'))
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" >&times;</button>
                <strong>Success!</strong>{{ session('Delete_Message') }}
                </div>
                @endif

                    <div class="row">
                        <div class="col-md-3 bg-info p-2">
                            <a href="{{route('home')}}" class="btn btn-light w-100 mb-2">Home</a>
                            <a href="{{route('register')}}" class="btn btn-light w-100 mb-2">Add New User</a>
                            <a href="{{route('addnewtask')}}" class="btn btn-light w-100 mb-2">Add New Task</a>
                            <a href="{{route('managetasks')}}" class="btn btn-light w-100 mb-2">Manage Tasks</a>
                        </div> 
                        <div class="col-md-9">
                        <div class="card-body">
                   
                        <div class="table-responsive">
                        <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                            <th>Id</th>
                            <th>Task Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($task as $tsk)
                            <tr>
                            <td>{{$tsk->id}}</td>
                            <td>{{$tsk->title}}</td>
                            <td>{{$tsk->description}}</td>
                            <td>{{$tsk->status}}</td>
                            <td><a class="btn btn-info" href="edit/{{$tsk->id}}">Edit</a> &nbsp; <a class="btn btn-danger" href="delete/{{$tsk->id}}" onclick="return confirm('Are you sure to delete Task?')">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
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
