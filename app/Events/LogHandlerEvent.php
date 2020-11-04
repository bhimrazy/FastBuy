<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class LogHandlerEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    /**
     * @var string
     */
    public $module;

    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $referenceId;

    /**
     * @var string
     */
    public $referenceUser;

    /**
     * @var string
     */
    public $referenceName;

    /**
     * @var string
     */
    public $type;


    /**
     * Create a new event instance.
     *
     * @param $module
     * @param $action
     * @param $type
     * @param $data
     * @param int $referenceUser
     */
    public function __construct($module, $action,$type, $data,$referenceUser = 0)
    {
        if ($referenceUser === 0 && Auth::check()) {
            $referenceUser = Auth::user()->getKey();
        }
        $this->module = $module;
        $this->action = $action;
        $this->referenceUser = $referenceUser;
        $this->referenceId = $data->id;
        $this->referenceName = auth()->user()->getFullName();
        $this->type = $type;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
