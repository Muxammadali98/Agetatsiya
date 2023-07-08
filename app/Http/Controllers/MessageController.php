<?php

namespace App\Http\Controllers;

use App\Helpers\Traits\ApiResponcer;
use App\Models\Chat;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    use ApiResponcer;

    function index($id) {

        $chats = Chat::all();

        $messages = Message::where('chat_id', $id)->orderBy('id', 'DESC')->get();
        
        return view('admin.chat.index', compact('chats','messages'));
    }

    function store(Request $request) {
        
        $this->validate($request,[
            'chat_id'=>'required',
            'text'=>'required'
        ]);

        $data = $request->all();
        $data['is_admin'] = true; 

        Message::create($data);

        $chats =Chat::all();

        $messages = Message::where('chat_id', $request->chat_id)->orderBy('id', 'DESC')->get();
        
        return view('admin.chat.index', compact('chats','messages'));

    }

    

}
