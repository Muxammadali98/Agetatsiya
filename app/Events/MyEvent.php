<?php
namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MyEvent implements ShouldBroadcast
{
    use Dispatchable, SerializesModels;

    public $data;

    public function __construct()
    {


    }

    public function broadcastOn()
    {
        return new Channel('my-channel');
    }
    

    public function broadcastAS()
    {
        return 'my-event';
    }
    

        /**
     * Get the data to broadcast.
     *
     * @return array
     */

     
    public function broadcastWith()
    {
        return [
            'data' => $this->data,
        ];
    }
}
