<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Services\ModelService;
use App\Services\RequestService;

class HistoryController extends Controller
{
	public function index(): void
	{
		$this->view('history',[
			'requests' => new RequestService($this->db()),
			'models' => new ModelService($this->db()),
			'user_id' => $this->auth()->user()->id()
		]);
	}
}
