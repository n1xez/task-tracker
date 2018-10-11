@extends('layouts.master')

@section('title', 'Page title')

@section('content')
    <div class="from-group">
        {{ Form::label('title', 'Название') }}
        {{ Form::text('title', $task->title, ['readonly'])  }}
    </div>
    <div class="from-group">
        {{ Form::label('description', 'Описание') }}
        {{ Form::textarea('description', $task->description, ['readonly'])  }}
    </div>
    <div class="from-group">
        {{ Form::label('user_id', 'Исполнитель') }}
        {{ Form::text('user_id', $task->executor->name, ['readonly'])  }}
    </div>
    <div class="from-group">
        {{ Form::label('author_id', 'Автор') }}
        {{ Form::text('author_id', $task->author->name, ['readonly'])  }}
    </div>
    <div class="from-group">
        {{ Form::label('status_id', 'Статус') }}
        {{ Form::text('status_id', $task->status->title, ['readonly'])  }}
    </div>
    <div>
        <a href="{{ route('tasks.edit', $task->id) }}">Редактировать</a>
    </div>
    <div>
        <a href="/">Назад</a>
    </div>
@endsection