<?php

namespace App\Listeners;

use App\Events\AuditEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class AuditEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\AuditEvent  $event
     * @return void
     */
    public function handle(AuditEvent $event)
    {
        DB::table('audits')->insert([
            'event' => $event->event,
            'tablename' => $event->table,
            'username' => $event->user,
            'data'=> $event->data
        ]);
    }
}
