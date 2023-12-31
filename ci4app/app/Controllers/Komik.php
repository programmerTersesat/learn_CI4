<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{

    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }

    public function index()
    {

        $data = [
            'title'=>"Daftar Komik",
            'komik'=>$this->komikModel->getKomik(),
        ];

        return view("komik/index",$data);
    }

    public function detail($slug){

        $data = [
            'title'=>"Daftar Komik",
            'komik'=>$this->komikModel->getKomik($slug),
        ];

        if(empty($data['komik']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Komik '.$slug.' tidak ditemukan !!');
        }

        return view("komik/detail",$data);
    }

    public function create(){

        $data = [
            'title'=>"Form Tambah Data Komik",
            'validation'=> \Config\Services::validation()
        ];

        return view("komik/create",$data);
    }

    public function save(){
//        dd($this->request->getVar());

        if(!$this->validate([
            'judul'=> [
                'rules'=>'required|is_unique[komik.judul]',
                'errors' => [
                    'required' => "{ field } komik harus diisi.",
                    'is_unique' => "{ field } komik sudah terdaftar"
                ]
            ]
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('judul'),'-',true);
        $this->komikModel->save([
            'judul'=>$this->request->getVar('judul'),
            'slug'=>$slug,
            'penulis'=>$this->request->getVar('penulis'),
            'penerbit'=>$this->request->getVar('penerbit'),
            'sampul'=>$this->request->getVar('sampul'),
        ]);

        session()->setFlashdata('pesan','Data berhasil di tambahkan');

        return redirect()->to('/komik');
    }

    public function delete($id){
        $this->komikModel->delete($id);
        session()->setFlashdata('pesan','Data berhasil di hapus');

        return redirect()->to('/komik');
    }

    public function edit($slug){
        $data = [
            'title'=>"Form Edit Data Komik",
            'validation'=> \Config\Services::validation(),
            'komik'=> $this->komikModel->getKomik($slug)
        ];

        return view("komik/edit",$data);
    }

    public function update($id){


        $slug = url_title($this->request->getVar('judul'),'-',true);
        $this->komikModel->save([
            'id'=> $id,
            'judul'=> $this->request->getVar('judul'),
            'slug'=> $slug,
            'penulis'=> $this->request->getVar('penulis'),
            'penerbit'=> $this->request->getVar('penerbit'),
            'sampul'=> $this->request->getVar('sampul'),
        ]);

        session()->setFlashdata('pesan','Data berhasil di ubah');

        return redirect()->to('/komik');
    }

    
}
