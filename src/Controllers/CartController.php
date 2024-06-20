<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\Http\Redirect;
use App\Services\CartService;
use App\Services\StationService;
use App\Services\ModelService;


class CartController extends Controller
{
	public function index(): void
	{
		$cart = new CartService($this->session(), $this->db());
		$station = new StationService($this->db());
        $models = new ModelService($this->db());

		$this->view('cart',[
			'carts' => $cart->all(),
			'models' => $models->all(),
			'stations' => $station->all(),
		]);
	}

	public function delete():void
	{
		$cart = new CartService($this->session(), $this->db());

		$cart->unsetItem($this->request()->input('cart_id'));

		$this->redirect('/cart');
	}

	
}
