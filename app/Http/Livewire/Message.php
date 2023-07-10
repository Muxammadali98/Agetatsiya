<?php   

namespace App\Http\Livewire;



use App\Models\Message as ModelsMessage;
use Livewire\Component;

class Message extends Component
{



    public $chats;

    public $messages;


 
    public function messageDelete($id)
    {

        ModelsMessage::destroy($id);
    }
    
    
    public function createEvent()
    {
        // Hodisa sodir qilish jarayoni
        $this->emit('eventCreated');
    }

    protected $listeners = [
        'echo:laravel_database_message,message' => 'handleMessage',
        'echo:eventName' => 'handleMessage',
    ];

    public function mount()
    {
        $this->listeners['eventCreated'] = 'handleMessage';

        $this->messages = ModelsMessage::where('chat_id', 1)->with('chat')->orderBy('id', 'DESC')->get();
    }


    public function handleMessage()
    {   
        session(['message'=>'test']);
        
        $this->messages = ModelsMessage::where('chat_id', 6)->with('chat')->orderBy('id', 'DESC')->get();
    }

  


    

    public function render()
    {
     

        return view('livewire.message');
    }
    
}
