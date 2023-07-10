<?php   

namespace App\Http\Livewire;

use App\Events\MessageEvent;
use App\Models\Chat;
use App\Models\Message as ModelsMessage;
use Livewire\Component;

class Message extends Component
{

    public $chats;
    public $messages;
    public $chatId;
    public $text;
    public $is_admin;

    public function getMessage($id) {
        $this->chatId = $id;
        $this->messages = ModelsMessage::where('chat_id', $id)->with('chat')->orderBy('id', 'DESC')->get();
    }

    protected $listeners = [
        'eventCreated' => 'handleMessage',
    ];


    public function mount()
    {
        $this->chats = Chat::all(); 
    }


    public function handleMessage($id)
    {   
        if($id['data'] == $this->chatId){
            $this->messages = ModelsMessage::where('chat_id', $this->chatId)->with('chat')->orderBy('id', 'DESC')->get();
        }
    }


    public function addMessage(){

        $text = $this->text;
        $is_admin = true; 

       $data =  ModelsMessage::create([
            'text' => $this->text,
            'is_admin' => true,
            'chat_id' => $this->chatId,
        ]);

        $this->messages = ModelsMessage::where('chat_id', $this->chatId)->with('chat')->orderBy('id', 'DESC')->get();
        event(new MessageEvent($data));

       $this->text = '';
    }


    public function render()
    {
        return view('livewire.message');
    }

    
}
