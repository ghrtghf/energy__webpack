<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Services\StationService;


class StationController extends Controller
{
    private StationService $service;

    public function edit(): void
    {
        $station = $this->service()->find($this->request()->input('id'));


        $this->view('admin/station/update', [
            'station' => $station
        ]);
    }

    public function update()
    {
        $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'body_protection' => ['required', 'min:3', 'max:255']
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
            $this->request()->input('body_protection')
        );

        $this->redirect('/admin');
    }

    public function create(): void
    {
        $this->view('admin/station/create');
    }

     public function store(): void
    {
        $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'body_protection' => ['required', 'min:3', 'max:255']
        ]);

        if (! $validation) {
            foreach ($this->request()->errors() as $field => $errors) {
                $this->session()->set($field, $errors);
            }

            $this->redirect('/admin/station/add');
        }

        $this->service()->store(
            $this->request()->input('name'),
            $this->request()->input('body_protection')
        );

        $this->redirect('/admin');
    }

    public function destroy()
    {
        $this->service()->delete($this->request()->input('id'));

        $this->redirect('/admin');
    }

    private function service(): StationService
    {
        if(! isset($this->service)){
            $this->service = new StationService($this->db());
        }

        return $this->service;
    }
}