<?php

namespace App\Models;

use CodeIgniter\Model;

class SubscribersModel extends Model
{
  protected $table = 'subscribers';
  protected $primaryKey = 'id';
  protected $allowedFields = [ 'email', 'created_at', 'updated-on'];



 public function Checksubscriber($email){

  return $this->table($this->table)
  ->where('email',$email)
  ->countAllResults();

 }

 public function get_subscribers(){

  return $this->db->table($this->table)
  ->get()
  ->getResultArray();

}
  


  
}
