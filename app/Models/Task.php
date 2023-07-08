<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'company_id',
            'group_id',
            'date',
            'status',
    ];

    function group() {
        return $this->belongsTo(Group::class);
    }
    function company() {
        return $this->belongsTo(Company::class);
    }
    function images() {
        return $this->hasMany(TaskImage::class);
    }

    function locations() {
        return $this->hasMany(TaskLocation::class)->with('worker');
    }

    function clients() {
        return $this->hasMany(Client::class);
    }
}
