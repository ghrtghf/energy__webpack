<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class CartController extends Controller
{
	public function index(): void
	{
		$this->view('cart');
	}
}
