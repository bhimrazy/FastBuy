<?php

namespace App\Listeners;

use App\Events\LogHandlerEvent;
use App\LogHistory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;

class LogHandlerListener
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * Create the event listener.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  LogHandlerEvent  $event
     * @return void
     */
    public function handle(LogHandlerEvent $event)
    {
        $data = [
            'user_agent'     => $this->request->userAgent(),
            'ip_address'     => $this->request->ip(),
            'module'         => $event->module,
            'action'         => $event->action,
            'user_id'        => $this->request->user() ? $this->request->user()->getKey() : 0,
            'admin_id'        =>auth()->guard('admin')->user()!=null?auth()->guard('admin')->id():null,
            'reference_user' => $event->referenceUser,
            'reference_id'   => $event->referenceId,
            'reference_name' => $event->referenceName,
            'type'           => $event->type,
        ];


        LogHistory::createOrUpdate($data);
    }
}
