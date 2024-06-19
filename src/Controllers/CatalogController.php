<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Services\ModelService;
use App\Services\StationService;

class CatalogController extends Controller
{
    public function index(): void
    {
        $this->session()->set(['cart']['4'], [4,1]);
        $stations = new StationService($this->db());
        $models = new ModelService($this->db());

        $this->view('catalog',[
            'stations' => $stations->all(),
            'models' => $models->all(),
        ]);
    }

    public function add(): void
    {
       $this->view('admin/catalog/add');
    }

    public function store()
    {
        
    }
}