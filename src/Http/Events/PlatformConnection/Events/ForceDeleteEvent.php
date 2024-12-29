<?php

namespace Innoboxrr\LaravelConnect\Http\Events\PlatformConnection\Events;

use Innoboxrr\LaravelConnect\Models\PlatformConnection;
use Illuminate\Support\Facades\App;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ForceDeleteEvent
{

    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $platformConnection;
    public $data;
    public $response;
    public $locale;

    public function __construct(PlatformConnection $platformConnection, array $data, $response, $locale = 'en')
    {
        $this->platformConnection = $platformConnection;
        $this->data = $data;
        $this->response = $response;
        $this->locale = $locale;
        App::setLocale($this->locale);
    }

    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }

}