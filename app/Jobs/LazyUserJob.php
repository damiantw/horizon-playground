<?php

namespace App\Jobs;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class LazyUserJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;

    public function __construct(User $user)
    {
        // Job accepts a single User instance when it is dispatched.
        $this->user = $user;
    }

    public function handle()
    {
        // I should probably do something with the User
        // but i'd rather just sleep for a half second.
        usleep(500000);

        // And sometimes i'll just randomly fail.
        if(rand(1, 100) >= 50) throw new \Exception('Everything is horrible.');
    }
}
