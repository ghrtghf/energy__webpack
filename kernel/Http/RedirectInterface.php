<?php

namespace App\Kernel\Http;

interface RedirectInterface
{
    public function to(string $uri);
}