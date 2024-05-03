<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class LogInController extends Controller
{
    public function index(): void
    {
        $this->view('LogIn');
    }

    public function logIn()
    {
       dd($this->auth());
    }
}