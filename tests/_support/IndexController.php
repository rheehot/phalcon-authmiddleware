<?php

namespace Tests;

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    /**
     * @AuthMiddleware("Tests\Middleware1")
     */
    public function indexAction()
    {
        return "Hello world";
    }

    /**
     * @AuthMiddleware("Tests\Middleware2")
     */
    public function index2Action()
    {
        return "Hello world";
    }
    
    /**
     * @AuthMiddleware("Tests\Middleware1")
     * @AuthMiddleware("Tests\Middleware2")
     */
    public function index3Action()
    {
        return "Hello world";
    }

    public function noMiddlewareAction()
    {
        return "Hello world";
    }

    /**
     * @AuthMiddleware("Tests\IndexController")
     */
    public function notProperMiddlewareAction()
    {
        return "This won't work as an Exception should get thrown";
    }
}
