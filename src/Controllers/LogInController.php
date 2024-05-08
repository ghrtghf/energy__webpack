<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class LogInController extends Controller
{
    public function index(): void
    {
        $this->view('login');
    }

    public function logIn()
    {
        $email = $this->request()->input('email');
        $password = $this->request()->input('password');
    
        $this->auth()->attempt($email, $password);

        $this->redirect('/');
    }

    public function logOut(): void
    {
        $this->auth()->logout();

        $this->redirect('/login');
    }
}