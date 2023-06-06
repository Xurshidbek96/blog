<?php

namespace App\Listeners;

use App\Events\LoginEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class LoginEventListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(LoginEvent $event)
    {
        DB::table('userinfos')->insert([
            'username' => $event->user,
            'date' => date('Y-m-d H:i:s')
        ]);
    }
}
