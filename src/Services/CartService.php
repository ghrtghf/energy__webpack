<?php

namespace App\Services;

use App\Kernel\Session\SessionInterface;
use App\Kernel\Database\DatabaseInterface;
use App\Models\Cart;

class CartService
{
    public function __construct(
        private SessionInterface $session,
        private DatabaseInterface $db
    )
    {
    }

    public function all()
    {
        $carts = $this->session->get('cart');

        if(isset($carts)){

        return array_map(function($carts){
            return new Cart(
                $carts['id'],
                $carts['count'],
                $carts['model_name'],
                $carts['model_price'],
                $carts['model_image'],
                $carts['station_id'],
                $carts['station_name'],
            );
            
        }, $carts);
        }

        return null;
    }

    public function store(int $id, int $count)
    {
        if(!$this->session->has('cart')){
            $this->session->set('cart', []);
        }

        $cart = $this->getCart();

        foreach($cart as $key => $value){
            if($value['id'] == $id){
                $cart[$key]['count'] += $count;

                return $this->session->set('cart', $cart);
            }
        }

        $models = new ModelService($this->db);
            $models = $models->all();
            foreach($models as $model){
				if($model->id() == $id){
					$model_gen = $model;
				}
			}

            $stations = new StationService($this->db);
            $stations = $stations->all();
            foreach($stations as $station){
				if($station->id() == $model_gen->station_id()){
					$station_gen = $station;
				}
            }

        $cart["product $id"] = [
            'id' => $id,
            'count' => $count,
            'model_name' => $model_gen->name(),
            'model_price' => $model_gen->price(),
            'model_image' => $model_gen->image(),
            'station_id' => $station_gen->id(),
            'station_name' => $station_gen->name(),
        ];

        return $this->session->set('cart', $cart);
    }

    public function unset()
    {
        return $this->session->remove('cart');
    }

    public function unsetItem($id)
    {
        $cart = $this->getCart();

        foreach($cart as $key => $value){
            if($value['id'] == $id){
                unset($cart[$key]);
            }
        }

        return $this->session->set('cart', $cart);
    }

    public function minus($id)
    {
        $cart = $this->getCart();

        foreach($cart as $key => $value){
            if($value['id'] == $id){
                if($value['count'] == 1){
                    return $this->unsetItem($id);
                }
                $cart[$key]['count']-- ;
                
            }
        }

        return $this->session->set('cart', $cart);
    }

    public function plus($id)
    {
        $cart = $this->getCart();

        foreach($cart as $key => $value){
            if($value['id'] == $id){
                $cart[$key]['count']++ ;
            }
        }

        return $this->session->set('cart', $cart);
    }

    public function getCart()
    {
        return $this->session->get('cart');
    }

    public function buy($user)
    {
        $carts = $this->all();

        $sum = 0;

        foreach($carts as $cart){
            $sum += $cart->sumItem();
        }

        $this->db->insert('requests',[
            'user_name' => $user->name(),
            'UserID' => $user->id(),
            'user_contact' => $user->phone(),
        ]);

        $id = $this->db->lastId();

        foreach($carts as $cart){
            $this->db->insert('ListRequests',[
            'model_id' => $cart->id(),
            'request_id' => $id,
            'count' => $cart->count(),
            'cost' => $cart->sumItem()
        ]);
        }

        return $this->unset();
    }
}