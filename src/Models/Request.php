<?php

namespace App\Models;

class Request
{
    public function __construct(
        private int $id,
        private string $user_name,
        private $UserID,
        private string $user_contact,
        private string $date_order
    ){
    }

    public function id()
    {
        return $this->id;
    }

    public function user_name()
    {
        return $this->user_name;
    }

    public function UserID()
    {
        return $this->UserID;
    }

    public function user_contact()
    {
        return $this->user_contact;
    }

    public function date_order()
    {
        return $this->date_order;
    }
}