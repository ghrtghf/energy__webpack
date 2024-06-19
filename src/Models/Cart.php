<?php

namespace App\Models;

class Cart
{
    public function __construct(
        private int $id,
        private int $count
    ){
    }

    public function id(): int
    {
        return $this->id;
    }

    public function count(): int
    {
        return $this->count;
    }
}