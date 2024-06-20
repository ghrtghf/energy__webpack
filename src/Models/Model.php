<?php

namespace App\Models;

class Model
{
    public function __construct(
        private int $id,
        private string $name,
        private int $price,
        private string $description,
        private string $image,
        private int $station_id,
    ){
    }

    public function all()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'image' => $this->image,
            'station_id' => $this->station_id,
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

    public function price(): int
    {
        return $this->price;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function image(): string
    {
        return $this->image;
    }

    public function station_id(): int
    {
        return $this->station_id;
    }

    public function search($id)
	{
		if($this->id() == $id){
			return $this->all();
		}
	}
}