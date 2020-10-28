<?php


namespace app\core;

/**
 * Class Request
 * @package app\core
 */

class Request
{

    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $postition = strpos($path,'?');
        if ($postition === false){
            return $path;
        }
        return substr($path, 0, $postition); //path before the questionmark
    }

    public function getMethod()
    {
        
    }
    
}