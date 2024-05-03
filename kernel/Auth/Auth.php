<?php

namespace App\Kernel\Auth;

use App\Kernel\Auth\Authinterface;
use App\Kernel\Database\DatabaseInterface;
use App\Kernel\Session\SessionInterface;

class Auth implements Authinterface
{
    public function __construct(
        private DatabaseInterface $database,
        private SessionInterface $session,
    )
    {
        
    }

    public function attempt(string $email, string $password): bool
    {

    }

    public function logout(): void
    {

    }

    public function check(): bool
    {

    }

    public function user(): ?array
    {

    }

}