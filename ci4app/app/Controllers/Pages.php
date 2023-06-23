<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title'=>"Index Pages",
        ];

        // return view('welcome_message');
        // echo view("layout/header",$data);
        return view("pages/home",$data);
        // echo view("layout/footer");
    }

    public function about()
    {
        // return view('welcome_message');
        $data = [
            'title'=>"About Pages",
        ];
        // echo view("layout/header",$data);
        return view("pages/about",$data);
        // echo view("layout/footer");
    }

    public function contact(){
        $data = [
            'title' => 'Contact Pages',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl Raya',
                    'kota' => 'Semarang'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl Panjang',
                    'kota' => 'Bandung'
                ]
            ]
        ];

        return view('pages/contact',$data);
    }
}
