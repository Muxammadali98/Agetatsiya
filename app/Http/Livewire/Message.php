<?php

namespace App\Http\Livewire;

use App\Models\Message as ModelsMessage;
use Livewire\Component;

class Message extends Component
{



    public $chats;

    public $messages;


    // protected $listeners = ['echo:laravel_database_message,message' => 'notifyNewOrder'];
    protected $listeners = [
        'echo:laravel_database_message,message' => 'handleMessage',
        'postAdded'=>'handleMessage'
    ];





        function delete($id) {
            Message::delete($id);
        }
    
  

    public function handleMessage()
    {   
       
        dd('test');
        $this->messages = ModelsMessage::where('chat_id', 2)->with('chat')->orderBy('id', 'DESC')->get();
    }

    public function mount(){

       
        $this->messages = ModelsMessage::all();

    }


    

    public function render()
    {

        return view('livewire.message');
    }
    
}
