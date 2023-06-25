<?php

namespace App\Controllers;

use App\Models\GuestBookUserModel;

use App\Models\GuestBookDataModel;

class GuestBook extends BaseController
{
    protected $model;

    protected $gb_model;

    public $session;


    public function __construct()
    {
        $this->model = new GuestBookUserModel();

        $this->gb_model = new GuestBookDataModel();

        $this->session = \Config\Services::session();

        $sessionData = [
            'session_id_user' => 1,
        ];

        $this->session->set($sessionData);

    }

    public function gb_show_all(){
        $data = [
            'gbdata'=>$this->gb_model->findAll(),
        ];

        return view("guest_book_pages/gb_show_all",$data);
    }

    public function user_show_all(){
        $test = $this->session->get('session_id_user');

        $data = [
            'user'=>$this->model->findAll(),
        ];

        return view("guest_book_pages/user_show_all",$data);
    }


    public function user_delete($id){
        $this->model->delete($id);
        return redirect()->to('/guest_book');
    }

    public function gb_delete($id){
        $this->gb_model->delete($id);
        return redirect()->to('/guest_book/gb_show_all');
    }

    public function user_edit($id){
        $data = [
            'user'=> $this->model->where(["id"=>$id])->first()
        ];

        return view("guest_book_pages/user_edit",$data);
    }

    public function user_update($id){
        $data = $this->request->getVar();
        $status = $this->request->getVar('status');

        if($status == "0"){
            $status = 0;
        }else {
            $status = 1;
        }

        $this->model->save([
            'id'=> $id,
            'email'=> $this->request->getVar('email'),
            'password'=> $this->request->getVar('password'),
            'status'=> $status,
            'nama'=> $this->request->getVar('nama'),
            'nik'=> $this->request->getVar('nik'),
            'alamat'=> $this->request->getVar('alamat'),
        ]);

        return redirect()->to('/guest_book');
    }

    public function user_create(){
        return view("guest_book_pages/user_create");
    }

    public function gb_create(){
        return view("guest_book_pages/gb_create");
    }

    public function user_save(){
        $data = $this->request->getVar();


        $status = $this->request->getVar('status');

        if($status == "0"){
            $status = 0;
        }else {
            $status = 1;
        }

        $this->model->save([
            'email'=> $this->request->getVar('email'),
            'password'=> $this->request->getVar('password'),
            'status'=> $status,
            'nama'=> $this->request->getVar('nama'),
            'nik'=> $this->request->getVar('nik'),
            'alamat'=> $this->request->getVar('alamat'),
        ]);

        return redirect()->to('/guest_book');
    }

    public function gb_save(){
        $get_id_user = $this->session->get('session_id_user');
        $data = $this->request->getVar();
//        dd($data);


        $status = $this->request->getVar('status');

        if($status == "0"){
            $status = 0;
        }else {
            $status = 1;
        }

        $this->gb_model->save([
            'title'=>$this->request->getVar('title'),
            'nama'=>$this->request->getVar('nama'),
            'alamat'=>$this->request->getVar('alamat'),
            'institusi'=>$this->request->getVar('institusi'),
            'no_telp'=>$this->request->getVar('no_telp'),
            'jenis_kelamin'=>$this->request->getVar('jenis_kelamin'),
            'status'=>$status,
            'id_user'=>$this->session->get('session_id_user'),
        ]);

        return redirect()->to('/guest_book/gb_show_all');
    }

    public function gb_edit($id){
        $data = [
            'gbdata'=> $this->gb_model->where(["id"=>$id])->first(),
            'session_id_user'=>$this->session->get('session_id_user'),
        ];

        return view("guest_book_pages/gb_edit",$data);
    }

    public function gb_update($id){
        $data = $this->request->getVar();
//        dd($data);
        $status = $this->request->getVar('status');

        if($status == "0"){
            $status = 0;
        }else {
            $status = 1;
        }

        $this->gb_model->save([
            'id'=>$id,
            'title'=>$this->request->getVar('title'),
            'nama'=>$this->request->getVar('nama'),
            'alamat'=>$this->request->getVar('alamat'),
            'institusi'=>$this->request->getVar('institusi'),
            'no_telp'=>$this->request->getVar('no_telp'),
            'jenis_kelamin'=>$this->request->getVar('jenis_kelamin'),
            'status'=>$status,
            'id_user'=>$this->session->get('session_id_user')
        ]);

        return redirect()->to('/guest_book/gb_show_all');
    }
}