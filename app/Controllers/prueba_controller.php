<?php

namespace App\Controllers;

class prueba_Controller extends BaseController
{
    public function index()
    {
        // Solución 1: color como número hexadecimal
        $data['colorCasaNum'] = 0xf2c28d;

        // Solución 2: color como string hexadecimal
        $data['colorCasaStr'] = '#f2c28d';
        return view('prueba',$data);
    }
} 

    /* {
    public function index()
    {
        return view('Neza_Segura');
    }
} */