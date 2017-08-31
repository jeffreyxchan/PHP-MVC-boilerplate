<?php

require_once CORE . 'Controller.php';

class MainController extends Controller
{
    public function index()
    {
        require_once VIEWS . 'index.php';
    }

    public function render($action)
    {
        $this->$action();
    }
}
