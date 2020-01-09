@extends('layouts.master')
@section('content')

    <!-- Styles -->
    <style>
        .task-card {
            width: 273px;
            height: 40px;
            padding-left: 75px;
            margin-left: 176px;
            /*background: #EBEDEF;*/
            color: lightslategray;
            margin-top: 48px;
            margin-bottom: 20px;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1);

        }

        button {
            height: 26px;
            border-radius: 5px;
        }

        form {
            margin-left: 176px;
        }

        .btns {
            margin-top: 10px;
            margin-top: 41px;
        }

        input {
            border: none;
            outline: none;
            color: black;
            -moz-box-shadow: 0 0 3px #ccc;
            -webkit-box-shadow: 0 0 3px #ccc;
            box-shadow: 0 0 3px #ccc;
            height: 43px;
            width: 360px;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 4px;
            margin-top: 7px;
        }

        .footer {
            margin-top: 57px;
            margin-left: 454px;
        }


    </style>
    <body>
    @yield('content')
    <?php
    $tasks = App\Task::all();
    ?>


    <form action={{ action('TasksController@store') }}  method="post">
        {{ csrf_field() }}

        <div>
            <label for="">Enter task</label>
            <input type="text" name="body">
        </div>

        <button type="submit" style="margin-top: 10px;margin-left: 210px">Add task</button>

    </form>

    @foreach($tasks as $task)

        <div class="task-card">
            <h6>{{$task->body}}</h6>
            <div class="btns">
                {{--                    <a href="{route('tasks.destroy',[$task->id])}}">Delete</a>--}}
                <form method="post" action='/delete'>
                    @csrf
                    <input type="hidden" value="{{$task->id}}" name="id"/>
                    <button type="submit">click to delete</button>
                </form>
                <button style="background-color: #1f6fb2">Edit</button>
            </div>
            '
        </div>

    @endforeach

    </body>

@endsection
