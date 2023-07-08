<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
   function index() {

      $chats = Chat::all();

      return view('admin.chat.index', compact('chats'));
 
   }
}
