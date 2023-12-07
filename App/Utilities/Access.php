<?php

namespace App\Utilities;

class Access
{
    public static function AddStyle(string $route)
    {
        return $_ENV['SERVER'] . 'assets/' . $route;
    }
}
