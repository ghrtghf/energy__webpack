<?php
namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Services\ModelService;
use App\Services\StationService;

class ModelController extends Controller
{
    private ModelService $service;

    public function edit(): void
    {
        $model = $this->service()->find($this->request()->input('id'));
        $station = new StationService($this->db());

        $this->view('admin/model/update', [
            'model' => $model,
            'stations' => $station->all()
        ]);
    }

    public function update()
    {
        $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
        ]);

        if (! $validation) {
            foreach ($this->request()->errors() as $field => $errors) {
                $this->session()->set($field, $errors);
            }

            $this->redirect("/admin/categories/update?id={$this->request()->input('id')}");
        }

        $this->service()->update(
            $this->request()->input('id'),
            $this->request()->input('name'),
            $this->request()->input('price'),
            $this->request()->input('description'),
            $this->request()->file('image'),
            $this->request()->input('station_id')
        );

        $this->redirect('/admin');
    }

    public function create(): void
    {
        $station = new StationService($this->db());
        
        $this->view('admin/model/create', [
            'stations' => $station->all()
        ]);
    }

    public function store()
    {
        $file = $this->request()->file('image');

        $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'price' => ['required'],
            'description' => ['required'],
        ]);

        if(! $validation){
            foreach ($this->request()->errors() as $field => $errors){
                $this->session()->set($field, $errors);
            }

            $this->redirect('/admin2');
        }

        $this->service()->store(
            $this->request()->input('name'),
            $this->request()->input('price'),
            $this->request()->input('description'),
            $this->request()->file('image'),
            $this->request()->input('station')
        );

        $this->redirect('/admin2');
    }

    public function destroy()
    {
        $this->service()->destroy($this->request()->input('id'));

        $this->redirect('/admin');
    }

    private function service(){
        if(! isset($this->service)){
            $this->service = new ModelService($this->db());
        }

        return $this->service;
    }
}