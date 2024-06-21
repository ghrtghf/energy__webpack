<?php

namespace App\Models;

class Status
{
    public function __construct(
        private int $id,
        private string $name
    ){
    }

    public function id()
    {
        return $this->id;
    }

    public function name()
    {
        return $this->name;
    }
}