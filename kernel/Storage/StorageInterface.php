<?php 

namespace App\Kernel\Storage;

Interface StorageInterface
{
    public function url(string $path): string;

    public function get(string $path): string;
}