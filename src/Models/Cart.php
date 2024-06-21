<?php

namespace App\Models;

class Cart
{
    public function __construct(
        private int $id,
        private int $count,
        private string $name,
        private string $price,
        private string $image,
        private int $station_id,
        private string $station
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

    public function name():string
    {
        return $this->name;
    }

    public function price():string
    {
        return $this->price;
    }

    public function image():string
    {
        return $this->image;
    }

    public function station_id():int
    {
        return $this->station_id;
    }

    public function station():string
    {
        return $this->station;
    }

    public function sumItem()
    {
        return $this->count * $this->price;
    }
}