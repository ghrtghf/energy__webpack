<?php

namespace App\Kernel\Translater;

use App\Kernel\Translater\TranslaterInterface;
use App\Kernel\Config\ConfigInterface;

class Translater implements TranslaterInterface
{
    public function __construct(
        private ConfigInterface $config,
    )
    {
        
    }
    public function translate(string $word): string
    {
        return $this->config->get("dictionary.$word", "$word");
    }
}