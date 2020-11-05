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
    public $activity;

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
     * @param $activity
     * @param $type
     * @param null $data
     * @param int $referenceUser
     */
    public function __construct($module, $action,$activity,$type, $data=null,$referenceUser = 0)
    {
        if ($referenceUser === 0 && Auth::check()) {
            $referenceUser = auth()->guard('admin')->user()!=null?auth()->guard('admin')->id():auth()->id();
        }

        $this->module = $module;
        $this->action = $action;
        $this->activity = $activity;
        $this->referenceUser = $referenceUser;
        $this->referenceId = $data->id;
        $this->referenceName = auth()->guard('admin')->user()!=null?auth()->guard('admin')->user()->getFullName():auth()->user()->getFullName();
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
