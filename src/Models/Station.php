<?php

namespace App\Models;

class Station
{
    public function __construct(
        private int $id,
        private string $name,
        private $body_protection,
    ){
    }

    public function all()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'body_protection' => $this->body_protection
            ];
    }

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function body_protection(): string
    {
        return $this->body_protection;
    }
}