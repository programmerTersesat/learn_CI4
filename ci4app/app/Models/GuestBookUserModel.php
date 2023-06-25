<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestBookUserModel extends Model {
    protected $table = "user";
    protected $useTimestamps = true;
    protected $allowedFields = ['email','password','nama','nik','alamat','status'];

//    public function getKomik($slug=false){
//        if($slug == false)
//        {
//            return $this->findAll();
//        }
//
//        return $this->where(["slug"=>$slug])->first();
//    }
}
