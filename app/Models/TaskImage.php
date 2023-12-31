<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaskImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'image',
        'task_id',
        'worker_id'
    ];

    public function worker() {
        return $this->belongsTo(Worker::class)->withTrashed();
    }
}
