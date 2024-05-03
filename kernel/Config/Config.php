<?php

namespace App\Kernel\Config;

use App\Kernel\Config\ConfigInterface;

//класс для получения данных из конфига
class Config implements ConfigInterface
{
    //функция для получения данных
    //принимаем название файла и эллемент массива из него, разделенные точкой
    public function get(string $key, $default = null): mixed
    {
        //разделяем название файла и эллемент массива по точке
        [$file, $key] = explode(".", $key);

        //создаем ссылку на принятый файл
        $configPath = APP_PATH . "/config/$file.php";

        //проверяем файл на наличие
        if (!file_exists($configPath)) {
            //если файла нет возвращаем null
            return $default;
        }

        //если файл есть то подключаем этот файл
        $config = require $configPath;

        //возвращаем данные по ключу из подключенного файла
        //если данных по ключу нет возврощаем null
        return $config[$key] ?? $default;
    }
}

