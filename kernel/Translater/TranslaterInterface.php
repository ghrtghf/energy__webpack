<?php

namespace App\Kernel\Translater;

interface TranslaterInterface
{
    public function translate(string $word): string;
}