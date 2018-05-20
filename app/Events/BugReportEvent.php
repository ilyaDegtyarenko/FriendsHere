<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class BugReportEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The place where the error occurred.
     *
     * @var
     */
    public $place;

    /**
     * Error error.
     *
     * @var
     */
    public $error;

    /**
     * Comment.
     *
     * @var
     */
    public $comment;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(string $place, string $error, string $comment = null)
    {
        $this->place = $place;
        $this->error = $error;
        $this->comment = $comment;
    }
}
