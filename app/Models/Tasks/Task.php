<?php

namespace App\Models\Tasks;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * @var string
     */
    protected $table = 'tasks';

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'status_id',
    ];
}