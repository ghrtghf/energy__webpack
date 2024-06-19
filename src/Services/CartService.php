<?php

namespace App\Services;

use App\Kernel\Session\SessionInterface;
use App\Models\Cart;

class CartService
{
    public function __construct(
        private SessionInterface $session
    )
    {
    }

    public function all(): array
    {
        $carts = $this->session->get('cart');

        return array_map(function($carts){
            return new Cart(
                $carts['id'],
                $carts['count']
            );
        }, $carts);
    }

    public function store(int $id, int $count)
    {
        
    }
}