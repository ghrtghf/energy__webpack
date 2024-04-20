<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class CatalogController extends Controller
{
    public function index(): void
    {
        $this->view('catalog');
    }

    public function add(): void
    {
       $this->view('admin/catalog/add');
    }

    public function store()
    {
        $validation = $this->request()->validate([
            'name'=> ['required', 'min:3', 'max:50'],
        ]);

        if(! $validation){
            foreach($this->request()->errors() as $field => $errors){
                $this->session()->set($field, $errors);
            }

            $this->redirect('/admin/catalog/add');
        }

        dd('validation passed');
    }
}