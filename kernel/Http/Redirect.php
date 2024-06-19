<?php

namespace App\Kernel\Http;

class Redirect implements RedirectInterface
{

    //функция для перенаправления по ссылке
    public function to(string $url)
    {
        header("Location: $url");
        exit;
    }
}