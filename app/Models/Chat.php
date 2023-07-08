<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'worker_id',
        'user_id'
    ];


    function worker() {
        return $this->belongsTo(Worker::class);
    }


    function messages() {
        return $this->hasMany(Message::class);
    }

    function user() {
        return $this->belongsTo(User::class);
    }
}
