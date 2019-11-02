<?php

namespace App\Events;

use App\Preorder;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PreorderCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $preorder;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Preorder $preorder)
    {
        $this->preorder = $preorder;
    }
}
