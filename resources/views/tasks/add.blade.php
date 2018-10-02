@extends('layouts.master')

@section('title', 'Tasks')

@section('content')
    {{ Form::open([
        'url' => 'tasks',
        'method' => 'post',
    ]) }}
    {{ Form::label('title', 'Создание новой задачи') }}
    @include('tasks.from')
    {{ Form::submit('Click Me!') }}
    <a href="/"></a>
    {{ Form::close() }}
@endsection