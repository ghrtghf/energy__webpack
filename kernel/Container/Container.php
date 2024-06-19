<?php

namespace App\Kernel\Container;

use App\Kernel\Auth\Authinterface;
use App\Kernel\Auth\Auth;
use App\Kernel\Http\RedirectInterface;
use App\Kernel\Http\Redirect;
use App\Kernel\Http\RequestInterface;
use App\Kernel\Http\Request;
use App\Kernel\Router\RouterInterface;
use App\Kernel\Router\Router;
use App\Kernel\Session\SessionInterface;
use App\Kernel\Session\Session;
use App\Kernel\Validator\ValidatorInterface;
use App\Kernel\Validator\Validator;
use App\Kernel\View\ViewInterface;
use App\Kernel\View\View;
use App\Kernel\Config\ConfigInterface;
use App\Kernel\Config\Config;
use App\Kernel\Database\DatabaseInterface;
use App\Kernel\Database\Database;
use App\Kernel\Storage\StorageInterface;
use App\Kernel\Storage\Storage;
use App\Kernel\Translater\TranslaterInterface;
use App\Kernel\Translater\Translater;




class Container
{
    public readonly RequestInterface $request;
    public readonly RouterInterface $router;
    private readonly TranslaterInterface $translater;
    public readonly ViewInterface $view;
    public readonly ValidatorInterface $validator;
    public readonly RedirectInterface $redirect;
    public readonly SessionInterface $session;
    public readonly ConfigInterface $config;
    public readonly DatabaseInterface $database;
    public readonly Authinterface $auth;
    public readonly StorageInterface $storage;

    public function __construct()
    {
        $this->registerServices();
    }

    private function registerServices(): void
    {
        $this->request = Request::createFromGlobals();

        $this->redirect = new Redirect();
        $this->session = new Session();
        $this->config = new Config();
        $this->translater = new Translater($this->config);
        $this->validator = new Validator($this->translater);
        $this->request->setValidator($this->validator);
        $this->database = new Database($this->config);
        $this->auth = new Auth( $this->database, $this->session, $this->config);
        $this->storage = new Storage($this->config);
        $this->view = new View($this->session, $this->request, $this->auth, $this->storage, $this->translater, );
        $this->router = new Router(
            $this->view, 
            $this->translater,
            $this->request, 
            $this->redirect, 
            $this->session, 
            $this->database,
            $this->auth,
            $this->storage,
        );
    }
    
}
