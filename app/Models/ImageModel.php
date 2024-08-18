<?php

namespace App\Models;

use CodeIgniter\Model;

class ImageModel extends Model
{
    protected $table = 'images'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['category','city_place_id','image','created_at','updated_at'];



    
  public function GetImagesbyid($category,$id){
    return $this->db->table($this->table) 
    ->where('category',$category)
    ->where('city_place_id',$id)
    ->get()
    ->getResultArray();
  }

  public function get_photos_pages_list() {
    return $this->db->table($this->table)
        ->select('images.*,explore_uttarakhand.id,explore_uttarakhand.title,explore_uttarakhand.city_id,cities.city_name')
        ->join('explore_uttarakhand', 'explore_uttarakhand.city_id = images.city_place_id','left') 
        ->join('cities', 'cities.id = images.city_place_id') 
        ->get()
        ->getResultArray();
}



 
  }
    

