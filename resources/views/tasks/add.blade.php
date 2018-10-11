@extends('layouts.master')

@section('title', 'Tasks')

@section('content')
    {{ Form::open([
        'url' => route('tasks.store'),
        'method' => 'post',
    ]) }}
    {{ Form::hidden('author_id', Auth::check() ? Auth::id() : null) }}
    {{ Form::label('title', 'Создание новой задачи') }}
    @include('tasks.from')
    {{ Form::submit('Создать!') }}
    <a href="/"></a>
    {{ Form::close() }}
@endsection