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
                <div class="card-header">{{ __('Dashboard - Update Task') }}</div>

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
                        <div class="card-body">
                    <form method="POST" action="{{ route('updatetask') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                            <div class="col-md-6">
                            <input id="id" type="hidden" class="form-control @error('id') is-invalid @enderror" name="id" value="{{$task->id}}" required autocomplete="title" autofocus>
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$task->title}}" required autocomplete="title" autofocus>

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
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{$task->description}}" required autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                <select name="status" class="form-control">
                                    <option value="pending"
                                    @if($task->status == 'pending')) selected @endif
                                    >Pending</option>
                                    <option value="active"
                                    @if($task->status == 'active')) selected @endif
                                    >Active</option>
                                    <option value="completed"
                                    @if($task->status == 'completed')) selected @endif
                                    >Complete</option>
                                </select>

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Task') }}
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
