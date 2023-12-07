<?php
namespace Helpers;
function AddStyle($route){
    return $_ENV['SERVER'] . $route;
}