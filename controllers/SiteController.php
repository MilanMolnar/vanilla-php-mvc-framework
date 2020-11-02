<?php

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

/**
 *
 *
 * Class SiteController
 * @package app\controllers
 *
 */


class SiteController extends Controller
{
    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        var_dump($body);
        return 'Hadle subbmit';
    }

    public function contact()
    {
        return $this->render('contact');
    }
    public function home()
    {
        $params = [
            'name' => 'MVC-Framework'
        ];

        return $this->render('home', $params);
    }
}