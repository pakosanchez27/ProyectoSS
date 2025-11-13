<?php

namespace App\Controllers;

class Noticias_Controller extends BaseController
{
    public function index()
    {
        return view('noticias');
    }
}