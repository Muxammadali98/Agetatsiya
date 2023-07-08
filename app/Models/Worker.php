<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Laravel\Passport\HasApiTokens;





class Worker extends  Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable , SoftDeletes;


    protected $fillable = [
        'name',
        'username',
        'surname',
        'password',
        'city_id',
        'address',
        'group_id',
        'status',
        'phone',
        'image',
        'job_title',
    ];

    function group() {
        return $this->belongsTo(Group::class)->with(['tasks', 'workers']);
    }
    
    function city() {
        return $this->belongsTo(City::class);
    }

    function chat() {
        return $this->hasOne(Chat::class)->with('messages');
    }
}
