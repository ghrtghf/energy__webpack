<?php

namespace App\Middleware;

use App\Kernel\Middleware\AbstractMiddleware;

class AdminMiddleware extends AbstractMiddleware
{
    public function handle(): void
    {
        if (!$this->auth->is_admin()){
            $this->redirect->to('/');
        }
    }
}