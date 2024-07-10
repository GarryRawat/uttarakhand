<?php

namespace App\Models;

use CodeIgniter\Model;

class AreaModel extends Model
{
    protected $table = 'area'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['category','city_place_id','top_places','top_food','area_images','created_at','updated-on'];



    
  public function Getareabyid($category,$id){

    return $this->db->table($this->table) 
    ->where('category',$category)
    ->where('city_place_id',$id)
    ->get()
    ->getResultArray();
  }



 
  }
    

