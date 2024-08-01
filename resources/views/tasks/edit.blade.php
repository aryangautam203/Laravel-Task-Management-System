@extends('layouts.app')

@section('main')
    <div class="container">
        <h1>Update task # {{$task->title}}</h1>
        <form method="POST" action="/tasks/{{$task->id}}/update">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{old('title', $task->title)}}">
                @if($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title')}}</span>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea type="text" class="form-control" rows="3"name="description">{{old('description',$task->description)}}</textarea>
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description')}}</span>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @endsection

