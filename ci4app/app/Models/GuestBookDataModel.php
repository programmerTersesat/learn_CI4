<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestBookDataModel extends Model {
    protected $table = "guest_book";
    protected $useTimestamps = true;
    protected $allowedFields = ['title','nama','alamat','institusi','no_telp','jenis_kelamin','status','id_user'];
}
