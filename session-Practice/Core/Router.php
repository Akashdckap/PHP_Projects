<?php
require "Controller/userController.php";

class router
{
    public $router = [];
    public $controller;

    public function __construct()
    {
        $this->controller = new userController();
    }

    public function get($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET'
        ];
    }

    public function post($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function routing()
    {
        foreach ($this->router as $key) {
            if ($key['uri'] === $_SERVER['REQUEST_URI']) {
                if ($key['action']) {
                    switch ($key['action']) {
                        case 'signIn':
                            $this->controller->signIn($_POST);
                            break;
                        case 'login':
                            $this->controller->login($_POST);
                            break;
                        case 'logOut':
                            $this->controller->logout();
                            break;
                        default:
                            $this->controller->listAll();
                    }
                } else {
                    $this->controller->song();
                }
            }
        }
    }
}
