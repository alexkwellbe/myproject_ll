<?php

namespace App\Listeners;

use Core\Events\RequestCaptured;

class TestHandler
{
    public function __invoke(RequestCaptured $event)
    {
        echo TestHandler::class;
    }
}