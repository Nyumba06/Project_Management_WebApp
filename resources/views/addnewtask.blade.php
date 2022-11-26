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
                <div class="card-header">{{ __('Dashboard - Add New Task') }}</div>  

                <div class="card-body bg-2">
                
                    <div class="row">
                        <div class="col-md-3 bg-1 p-2">
                            <a href="{{route('home')}}" class="btn btn-light w-100 mb-2">Home</a>
                            <a href="{{route('register')}}" class="btn btn-light w-100 mb-2">Add New User</a>
                            <a href="{{route('addnewtask')}}" class="btn btn-light w-100 mb-2">Add New Task</a>
                            <a href="{{route('managetasks')}}" class="btn btn-light w-100 mb-2">Manage Tasks</a>
                        </div>
                        <div class="col-md-1">&nbsp;</div>
                        <div class="col-md-8">
                        <div class="card-body">
                    <form method="POST" action="{{ route('addtask') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="" required autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Task') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
