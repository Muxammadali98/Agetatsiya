<?php

namespace App\Http\Livewire;

use App\Models\Message as ModelsMessage;
use Livewire\Component;

class Message extends Component
{



    public $chats;

   


    // protected $listeners = ['echo:laravel_database_message,message' => 'notifyNewOrder'];
    protected $listeners = [
        'echo:laravel_database_message,message' => 'handleMessage',
        'postAdded'=>'handleMessage'
    ];





        function delete($id) {
            
            session(['message'=>'ishladi']);
            ModelsMessage::find($id)->delete(); 
        }
    
            //     public function mount(){

            
            //         $this->messages = ModelsMessage::all();
            
            //     }

            // public function handleMessage()
            // {   
            
            //     $this->messages = ModelsMessage::where('chat_id', 2)->with('chat')->orderBy('id', 'DESC')->get();
            // }

  


    

    public function render()
    {
        // $this->messages =  ModelsMessage::all();

        $messages = ModelsMessage::all();

        return view('livewire.message',compact('messages'));
    }
    
}
