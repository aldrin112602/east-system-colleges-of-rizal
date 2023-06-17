<?php

namespace App\Controllers;

class Routes extends BaseController
{
    public function index()
    {
        return view('templates/Headers') . 
               view('index') . 
               view('templates/Footers');
    }
}
