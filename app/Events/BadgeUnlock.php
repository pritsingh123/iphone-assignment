<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class BadgeUnlocked
{
    use Dispatchable, SerializesModels;

    public $user;
    public $badge;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(string $badge, User $user)
    {
        $this->badge = $badge;
        $this->user = $user;
    }
}
