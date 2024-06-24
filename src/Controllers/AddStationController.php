<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class AddStationController extends Controller
{

	public function index(): void
	{
		$this->view('addStation');
	}
}
