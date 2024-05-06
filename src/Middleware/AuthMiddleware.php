<?php

namespace App\Kernel\Middleware\AbstructMiddleware;
use app\Kernel\Middleware\AbstractMiddleware;

class AuthMiddleware extends AbstractMiddleware
{
    public function handle(): void
    {
        if (! $this->auth->check()) {
            $this->redirect->to('/login');
        }
    }
}