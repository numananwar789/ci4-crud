<?php namespace App\Controllers;

class Page extends BaseController {
    public function index()
    {
        echo 'Welcome to Page Controller';
    }

    public function about($param = 'Guest')
    {
        echo 'Welcome to about Page ' .$param;
    }
}