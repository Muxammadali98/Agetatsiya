<?php

namespace App\Http\Controllers\Api;

use App\Events\MessageEvent;
use App\Helpers\Traits\ApiResponcer;
use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    use ApiResponcer;

    function store(Request $request) {

        $error=Validator::make($request->all(), [
           
            'text'=>'required'
        ]);

        if($error->fails()){
            return $this->error("", 400, $error->errors());
        }


        $data = $request->all();

        if(!isset($request->chat_id)){
            $id = auth()->guard('api')->id();

            $chat = Chat::find($id);

            if(!isset($chat->id)){
                $chat = Chat::create(['worker_id'=>$id, 'user_id'=>1]);
            }
            $data['chat_id'] = $chat->id;
        }
        $data['is_admin'] = false; 
        


        Message::create($data);


        $messages = Message::where('chat_id', $data['chat_id'])->orderBy('id', 'DESC')->get();

        event(new MessageEvent());
        
        return $this->success($messages, 'add message', 201, );

    }


    function index() {
        $worker = auth()->guard('api')->user();


        return $this->success($worker->chat->messages);
    }


    function destroy($id) {
        Message::destroy($id);
        return true;
    }



}
