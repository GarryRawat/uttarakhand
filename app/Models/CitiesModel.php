<?php

namespace App\Models;

use CodeIgniter\Model;

class CitiesModel extends Model
{
    protected $table = 'cities'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['city_name'];




    public function Getcity(){

      return $this->db->table($this->table)
      ->get()
      ->getResultArray();
    }
    public function GetcityBYslug($slug){

      return $this->db->table($this->table)
      ->where('city_name',$slug)
      ->get()
      ->getRowArray();
    }
    
  }
    

