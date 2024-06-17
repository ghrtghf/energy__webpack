<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Services\ModelService;
use App\Services\StationService;

class AdminController extends Controller
{
    public function index(): void
    {
        $stations = new StationService($this->db());
        $models = new ModelService($this->db());

        $this->view('admin/index',[
            'stations' => $stations->all(),
            'models' => $models->all(),
        ]);
    }
}