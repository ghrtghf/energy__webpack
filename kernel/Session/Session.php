<?php 

namespace App\Kernel\Session;

//класс для работы с сессиями
class Session implements SessionInterface
{
    //создание сессии при создании объекта
    public function __construct()
    {
        session_start();
    }

    //класс для внесенния данных в сессию
    public function set($key, $value): void
    {
        $_SESSION[$key] = $value;
    }

    public function setDuble($key1, $key2, $value)
    {
        $_SESSION[$key1][$key2] = $value;
    }

    //класс для получения данных из сессии
    public function get(string $key, $default = null)
    {
        return $_SESSION[$key] ?? $default;
    }

    public function getDuble($key1, $key2, $default = null)
    {
        return $_SESSION[$key1][$key2] ?? $default;
    }

    //класс для получения данных из сессии и удаления их
    public function getFlash(string $key, $default = null)
    {
        $value = $this->get($key, $default);
        $this->remove($key);

        return $value;
    }

    //класс для проверки наличия данных в сессии
    public function has(string $key): bool
    {
        return isset($_SESSION[$key]);
    }

    //класс для удаления данных из сессии
    public function remove(string $key): void
    {
        unset($_SESSION[$key]);
    }

    //класс для удаления всех данных из сессии
    public function destroy(): void
    {
        session_destroy();
    }

    private function isString($key)
    {
        
    }
}