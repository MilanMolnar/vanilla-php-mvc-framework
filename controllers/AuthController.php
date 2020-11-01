<?php


namespace app\controllers;

use app\core\Controller;
use app\core\Request;

/**
 * Class AuthController
 * @package app\controllers
 *
 */

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {

        if ($request->isPost()){
            return "handle register";
        }
        $this->setLayout('auth');
        return $this->render('register');
    }
}