@extends('layouts.master')

@section('title', 'Tasks')

@section('content')
    <div class="content">
        <a href="/tasks/create">Создать</a>
        <ul>
            @foreach ($tasks as $task)
                <li>{{ $task->title }}</li>
            @endforeach
        </ul>
    </div>
@endsection