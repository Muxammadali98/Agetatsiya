<?php

namespace App\Http\Livewire;

use App\Events\NotifiAdminEvent;
use App\Models\Chat;
use Livewire\Component;

class Notifikation extends Component
{   
    public $notifi;
    public $count;

    


    
    protected $listeners = [
        'eventChat' => 'changeNotification',
        'notifiNull' => 'changeNotification'
    ];

    // public function sendEvent($id){
    //     event(new NotifiAdminEvent($id));
    // }

    public function mount(){
        
        $chat = Chat::query();
        
         $chat = $chat->whereNotNull('message');
        
        $chat = $chat->orWhere([
            ['user_id', '=', null],
            ['user_id', '=', auth()->id()],
            ]);
            
        // $chat = $chat->whereNull('user_id')->orWhere('user_id',auth()->id());
  
      
        $this->notifi = $chat->orderBy('updated_at','DESC')->get();
        

        
        

        $this->count = array_sum(array_column($this->notifi->toArray(),'message'));   
        
    }
    public function changeNotification(){
        
        
        $chat = Chat::query();
        
        $chat = $chat->whereNotNull('message');
        $chat = $chat->orWhere([
            ['user_id', '=', null],
            ['user_id', '=', auth()->id()],
            ]);
 
      
        $this->notifi = $chat->orderBy('updated_at','DESC')->get();

        $this->count = array_sum(array_column($this->notifi->toArray(),'message'));   
        
    }

    public function render()
    {
        return view('livewire.notifikation');
    }
}
