<?php


namespace app\core;
/**
 * Base controller, every controller defined in this framework should extend this class.
 *
 * Class Controller
 * @package app\core
 */

class Controller
{
    public string $layout ='main';
    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
}