@extends('layouts.master')

@section('title', 'Tasks')

@section('content')
    <div class="content">
        <a href="tasks/create"></a>
        <a href="{{ route('tasks.create') }}">Создать</a>
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a>
                    <span>({{ $task->status->title }})</span>
                    <button type="button"
                            class="m-delete"
                            data-id="{{ $task->id }}"
                            data-type="tasks"
                    ><span class="glyphicon glyphicon-trash"></span></button>
                </li>
            @endforeach
        </ul>
    </div>
@endsection