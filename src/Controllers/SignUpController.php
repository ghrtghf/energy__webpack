<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class SignUpController extends Controller
{
    public function index(): void
    {
        $this->view('signUp');
    }
}