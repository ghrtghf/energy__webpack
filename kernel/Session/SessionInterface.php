<?php

namespace App\Kernel\Session;

interface SessionInterface
{

    public function set(string $key, $value): void;

    public function setDuble($key1, $key2, $value);

    public function get(string $key, $default = null);

    public function getDuble($key1, $key2, $default = null);

    public function getFlash(string $key, $default = null);

    public function has(string $key): bool;

    public function remove(string $key): void;

    public function destroy(): void;
}