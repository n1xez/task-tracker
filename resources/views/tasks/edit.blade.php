@extends('layouts.master')

@section('title', 'Tasks')

@section('content')
    {{ Form::model($task, [
        'url' => route('tasks.update', $task->id),
        'method' => 'PATCH',
    ]) }}
    {{ Form::label('title', 'Изменение задачи') }}
    @include('tasks.from')
    {{ Form::submit('Обновить!') }}
    <a href="{{ route('tasks.show', $task->id) }}">Отмена</a>
    {{ Form::close() }}
@endsection