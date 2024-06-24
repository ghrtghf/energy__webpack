<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Services\ModelService;
use App\Services\StationService;
use App\Services\RequestService;


class AdminController extends Controller
{
	public function index(): void
	{
		$stations = new StationService($this->db());
		$models = new ModelService($this->db());

		$this->view('admin/index', [
			'stations' => $stations->all(),
			'models' => $models->all(),
		]);
	}
	public function index2(): void
	{
		$this->view('admin',[
			'requests' => new RequestService($this->db()),
			'stations' => new StationService($this->db()),
			'models' => new ModelService($this->db()),
		]);
	}

	public function updateStatus():void
	{
		$this->db()->update('ListRequests', [
			'status_id' => $this->request()->input('status')
		],[
			'id' => $this->request()->input('id')
		]);

		$this->redirect('/admin2');
	}
}
