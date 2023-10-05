<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title'
    ];
    function workers() {
        return $this->hasMany(Worker::class);
    }
    function clients() {
        return $this->hasMany(Client::class);
    }
    function tasks() {
        return $this->hasMany(Task::class)->with('company');
    }

}
