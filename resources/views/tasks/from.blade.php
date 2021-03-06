<div class="from-group">
    {{ Form::label('title', 'Название') }}
    {{ Form::text('title', null)  }}
</div>
<div class="from-group">
    {{ Form::label('description', 'Описание') }}
    {{ Form::textarea('description', null)  }}
</div>
<div class="from-group">
    {{ Form::label('user_id', 'Исполнитель') }}
    {{ Form::select('user_id',
        \App\Models\User::all()->pluck('name', 'id'),
        Auth::check() ? Auth::id() : null )
    }}
</div>
<div class="from-group">
    {{ Form::label('status_id', 'Статус') }}
    {{ Form::select('status_id', \App\Models\Tasks\TaskStatus::all()->pluck('title', 'id'), null) }}
</div>




