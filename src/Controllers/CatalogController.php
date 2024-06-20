<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\Http\Redirect;
use App\Services\CartService;
use App\Services\ModelService;
use App\Services\StationService;

class CatalogController extends Controller
{
    public function index(): void
    {
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

     public function show(){
        $station = new StationService($this->db());
        $models = new ModelService($this->db());
        $model = $models->find($this->request()->input('id'));
        $this->view('item',[
            'model' => $model,
            'station' => $station->find($model->station_id()),
            'id' => $this->request()->input('id')
        ]);
    }

    public function store()
    {
        $cart = new CartService($this->session(), $this->db());

        $cart->store($this->request()->input('id'), $this->request()->input('count'));

        $this->redirect('/catalog');
    }
}