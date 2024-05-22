<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChatMessageEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    private $message = null;

    public function __construct(string $message){
        $this->message = $message;
    }
    // в какие каналы транслировать
    public function broadcastOn(): array {
        return [
            new Channel('public.chat.1'),
        ];
    }
    // какое имя будет у ивента
    public function broadcastAs(){
        return 'chat-message';
    }
    // какие данные передаст ивент
    public function broadcastWith(){
        return ['message' => $this->message,'user'=>auth()->user()->id];
    }
    
}
