<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        $this->view('signUp');
    }

    //функция для регистрации пользователя
    public function register()
    {
        //валидируем данныые
        $validdation = $this->request()->validate([
            //прописыываем правила валидации
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'telephone' => ['required', 'min:10', 'max:255'],
            'password' => ['required', 'min:3','max:255', 'confirmed'],
            'password_confirm' => ['required', 'min:3','max:255']
        ]);

        //если валидация выдает ошибку
        if (!$validdation) {
            //перебираем ошибки и заносим их в сессию
            foreach ($this->request()->errors() as $field => $errors){
                $this->session()->set($field, $errors);
            }

            //возвращаемся на страницу
            $this->redirect('/signUp');
        }

        $this->db()->insert('Users', [
            'email' => $this->request()->input('email'),
            'name' => $this->request()->input('name'),
            'phone' => $this->request()->input('telephone'),
            'password' => password_hash($this->request()->input('password'), PASSWORD_DEFAULT),
        ]);

        $this->redirect('/');
    }
}