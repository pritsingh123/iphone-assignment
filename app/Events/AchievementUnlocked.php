<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class AchievementUnlocked
{
    use Dispatchable, SerializesModels;

    public $user;
    public $achievement;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(string $achievement, User $user)
    {
        $this->achievement = $achievement;
        $this->user = $user;
    }
}
