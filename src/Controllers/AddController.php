<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class AddController extends Controller
{

	public function index(): void
	{
		$this->view('add');
	}
}
