<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
  protected $table = 'admin';
  protected $primaryKey = 'id';
  protected $allowedFields = ['username', 'password'];




  public function GetAdminDetails($username){
     return $this->db->table('admin')->where('username',$username)->get()->getRow();
  }
}

