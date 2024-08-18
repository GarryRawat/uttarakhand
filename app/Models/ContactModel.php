<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
  protected $table = 'contact_us';
  protected $primaryKey = 'id';
  protected $allowedFields = ['name', 'email', 'subject', 'message', 'created_at', 'updated-on'];




 
  public function get_contact_data(){

    return $this->db->table($this->table)
    ->get()
    ->getResultArray();

  }
  


  
}