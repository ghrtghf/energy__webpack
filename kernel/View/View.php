<?php

namespace App\Kernel\View;

use App\Kernel\Auth\Authinterface;
use App\Kernel\Exceptions\ViewNotFoundException;
use App\Kernel\Session\SessionInterface;

//класс для просмотра вызываемовых файлов
class View implements ViewInterface
{   
    //подключаемся к классам сессии и пользователя
    public function __construct(
        private SessionInterface $session,
        private Authinterface $auth,
    ){}
    //функция для вызова страниц сайта
    //принимает название страницы
    public function page(string $name): void
    {
        //задаем в переменную путь до страницы 
        $viewPath = APP_PATH."/views/pages/$name.php";

        //проверяем существует ли страница
        if (! file_exists($viewPath)) {
            //если страницы не существует то вызываем класс ошибки
            throw new ViewNotFoundException("View $name not found");
        }

        //если страница существет разбиваем на переменныые массив вызванный функцией defaultData()
        extract(array: $this->defaultData());

        //вызываем страницу по раннее заданому маршруту
        include_once $viewPath;
    }

    //функция для вызова компонентов
    //принимаем название компонента
    public function component(string $name): void
    {
        //задаем в переменную путь до компонента
        $componentPath = APP_PATH."/views/components/$name.php";

        //проверяем существует ли компонент
        if (! file_exists($componentPath)) {
            //если компонента не существует выводим ошибку
            echo "Component $name not found";
            return;
        }

        //если компонент существует разбиваем на переменные массив вызванный функцией defaultData()
        extract(array: $this->defaultData());

        //вызываем компонент по раннее заданому маршруту
        include_once $componentPath;
    }

    //функция для возврата массива с экземплярами классов
    private function defaultData():array {
        return [
            'view' => $this,
            'session' => $this->session,
            'auth' => $this->auth,
        ];
    }
}
