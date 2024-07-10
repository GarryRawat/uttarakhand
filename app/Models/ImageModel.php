<?php

namespace App\Models;

use CodeIgniter\Model;

class ImageModel extends Model
{
    protected $table = 'images'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['category','city_place_id','image'];



    
  public function GetImagesbyid($category,$id){

    return $this->db->table($this->table) 
    ->where('category',$category)
    ->where('city_place_id',$id)
    ->get()
    ->getResultArray();
  }



 
  }
    

