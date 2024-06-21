<?php

namespace App\Models;

class ListRequest
{
    public function __construct(
        private int $id,
        private int $model_id,
        private int $request_id,
        private int $count,
        private int $cost,
        private int $status_id,
    ){
    }

    public function id()
    {
        return $this->id;
    }

    public function model_id()
    {
        return $this->model_id;
    }

    public function request_id()
    {
        return $this->request_id;
    }

    public function count()
    {
        return $this->count;
    }

    public function cost()
    {
        return $this->cost;
    }

    public function status_id()
    {
        return $this->status_id;
    }
}