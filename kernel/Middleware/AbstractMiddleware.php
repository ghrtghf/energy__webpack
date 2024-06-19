<?php

namespace app\Kernel\Middleware;

use App\Kernel\Auth\Authinterface;
use App\Kernel\Http\RedirectInterface;
use App\Kernel\Http\RequestInterface;


abstract class AbstractMiddleware
{
    public function __construct(
        protected RequestInterface $request,
        protected Authinterface $auth,
        protected RedirectInterface $redirect,
    )
    { 
    }    
        
    abstract public function handle(): void;
    
}