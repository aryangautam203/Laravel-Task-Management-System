@extends('layouts.app')

@section('main')


    <div class="container border rounded mt-5">
        <h1 class="index_heading mt-3 mb-3">Task Management System</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <th scope="row">{{$loop->index + 1}}</th>
                        <td>{{$task->title}}</td>
                        <td>{{$task->description}}</td>
                        <td>
                            <a href="tasks/{{$task->id}}/edit" class="btn btn-dark btn-sm">Update</a>

                            <form action="tasks/{{$task->id}}/delete" class="d-inline" method="POST">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection

