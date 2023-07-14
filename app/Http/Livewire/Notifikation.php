<?php

namespace App\Http\Livewire;

use App\Events\NotifiAdminEvent;
use App\Models\Chat;
use Livewire\Component;

class Notifikation extends Component
{   
    public $chats;
    public $count;

    


    
    protected $listeners = [
        'eventChat' => 'changeNotification'
    ];

    // public function sendEvent($id){
    //     event(new NotifiAdminEvent($id));
    // }

    public function mount(){
        $this->chats = Chat::whereNotNull('message')->where('user_id',auth()->id())->whereNull('user_id')->orderBy('updated_at','DESC')->get();

        $this->count = array_sum(array_column($this->chats->toArray(),'message'));   
        
    }
    public function changeNotification(){
      
        $this->chats = Chat::whereNotNull('message')->orWhere('user_id',auth()->id())->whereNull('user_id')->orderBy('updated_at','DESC')->get();

        $this->count = array_sum(array_column($this->chats->toArray(),'message'));   
        
    }

    public function render()
    {
        return view('livewire.notifikation');
    }
}
