<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class ProfileController extends Controller
{
    public function index(): void
    {
        $this->view('profile');
    }

    public function update(): void
    {
        $validdation = $this->request()->validate([
            'name' => ['max:255'],
            'email' => ['email'],
            'phone' => ['min:10', 'max:255'],
            'password' => ['max:255'],
        ]);

        if (!$validdation) {
            foreach ($this->request()->errors() as $field => $errors){
                $this->session()->set($field, $errors);
            }

            $this->redirect('/profile');
        }

        $data = [
            'name' => $this->request()->input('name'),
            'email' => $this->request()->input('email'),
            'phone' => $this->request()->input('phone'),
        ];

        if ($this->request()->input('password')) {
            $data['password'] = password_hash($this->request()->input('password'), PASSWORD_DEFAULT);
        }

        $this->db()->update('Users', $data, [
            'id' => $this->request()->input('id'),
        ]);

        $this->redirect('/profile');
    }
}