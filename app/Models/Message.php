<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_admin',
        'text',
        'chat_id'
        
    ];


    function chat() {
        return $this->belongsTo(Chat::class)->with('worker');
    }
}
