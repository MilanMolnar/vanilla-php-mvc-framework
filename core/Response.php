<?php


namespace app\core;

/**
 * This class implements the Response helper functions
 *
 * Class Response
 * @package app\core
 */

class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }
}