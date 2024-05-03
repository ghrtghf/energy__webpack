<?php

namespace App\Kernel\Auth;

interface Authinterface
{
    public function attempt(string $email, string $password): bool;

    public function logout(): void;

    public function check(): bool;

    public function user(): ?array;
}