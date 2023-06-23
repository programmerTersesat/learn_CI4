<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo "Ini Controller Coba method Index";
    }

    public function about($nama=""){
        echo "Halo nama saya : $nama";
    }
}
