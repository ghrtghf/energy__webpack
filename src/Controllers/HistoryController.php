<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class HistoryController extends Controller
{
	public function index(): void
	{
		$this->view('history');
	}
}
