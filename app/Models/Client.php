<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'title',
        'phone',
        'status_id',
        'comment',
        'worker_id',
        'group_id',
        'task_id',
    ];

    function status() {
        return $this->belongsTo(Status::class);
    }

    function worker() {
        return $this->belongsTo(Worker::class);
    }
    function group() {
        return $this->belongsTo(Group::class);
    }

    function task() {
        return $this->belongsTo(Task::class);
    }

}
