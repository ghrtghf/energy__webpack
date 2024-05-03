<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        $this->view('register');
    }

    //функция для регистрации пользователя
    public function register()
    {
        //валидируем данныые
        $validdation = $this->request()->validate([
            //прописыываем правила валидации
            'email' => ['required', 'email'],
            'password' => ['required', 'min:3']
        ]);

        //если валидация выдает ошибку
        if (!$validdation) {
            //перебираем ошибки и заносим их в сессию
            foreach ($this->request()->errors() as $field => $errors){
                $this->session()->set($field, $errors);
            }

            //возвращаемся на страницу
            $this->redirect('/register');
        }

        $this->db()->insert('users', [
            'email' => $this->request()->input('email'),
            'password' => password_hash($this->request()->input('password'), PASSWORD_DEFAULT),
        ]);

        dd('user in');
    }
}