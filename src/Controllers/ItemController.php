<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class ItemController extends Controller
{
	public function index(): void
	{
		$this->view('item');
	}
}
