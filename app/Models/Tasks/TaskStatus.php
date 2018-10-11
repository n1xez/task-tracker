<?php

namespace App\Models\Tasks;

use Illuminate\Database\Eloquent\Model;

class TaskStatus extends Model
{
    /**
     * @var string
     */
    protected $table = 'task_statuses';

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'code',
    ];
}