<?php

namespace App\Kernel\Auth;

use App\Kernel\Auth\Authinterface;
use App\Kernel\Config\ConfigInterface;
use App\Kernel\Database\DatabaseInterface;
use App\Kernel\Session\SessionInterface;

//
class Auth implements Authinterface
{
    //подключаемся к классам баз данных, сессии и конфигов
    public function __construct(
        private DatabaseInterface $db,
        private SessionInterface $session,
        private ConfigInterface $config,
    )
    {
        
    }

    //функция для авторизации пользователя
    //принимает значение логина и пароля
    public function attempt(string $username, string $password): bool
    {
        //вызываем в переменную функцию first экземпляра бд
        //передаем в нее результат функции table() и функции username()
        $user = $this->db->first($this->table(), [
            $this->username() => $username,
        ]);

        //если пользователь не найден
        if (!$user) {
            //возвращаем false
            return false;
        }

        //если пароль не совпадает с вернувшимся паролем
        if(!password_verify($password, $user[$this->password()])) {
            //возвращаем false
            return false;
        }

        //записываем в сессию id пользователя под вернувшися из функции sessionField() названии
        $this->session->set($this->sessionField(), $user['id']);

        //возвращаем true
        return true;
    }

    //функция для выхода из профиля
    public function logout(): void
    {
        //вызываем функцию для очистки сессии от id пользователя
        $this->session->remove($this->sessionField());
    }

    //функция для проверки есть ли пользователь в сессии
    public function check(): bool
    {
        //возвращаем результат проверки наличия эллемента сессии
        return $this->session->has($this->sessionField());
    }

    //
    public function user(): ?User
    {
        //если пользователя нет в сессии
        if (! $this->check()) {
            //возвращаем null
            return null;
        }

        //
        $user = $this->db->first($this->table(), [
            'id' => $this->session->get($this->sessionField()),
        ]);

        if ($user) {
            return new User(
                $user['id'],
                $user[$this->username()],
                $user['name'],
                $user['phone'],
                $user[$this->password()],
            );
        }

        return null;
    }

    public function is_admin(): bool
    {
        if ($this->check()) {
            $user = $this->db->first($this->table(), [
                'id' => $this->session->get($this->sessionField()),
            ]);

            if($user['is_admin'] == 1){
                return true;
            }
        }

        return false;
    }

    public function table(): string
    {
        return $this->config->get('auth.table', 'Users');
    }

    public function username(): string
    {
        return $this->config->get('auth.username', 'email');
    }

    public function password(): string
    {
        return $this->config->get('auth.password', 'password');
    }

    public function sessionField(): string
    {
        return $this->config->get('auth.session_field', 'user_id');
    }
}