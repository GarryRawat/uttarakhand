<?php

namespace App\Models;

use CodeIgniter\Model;

class ImageModel extends Model
{
  protected $table = 'images';
  protected $primaryKey = 'id';
  protected $allowedFields = ['category', 'city_place_id', 'image', 'created_at', 'updated_at'];




  public function GetImagesbyid($category, $id){
    return $this->db->table($this->table)
      ->where('category', $category)
      ->where('city_place_id', $id)
      ->get()
      ->getResultArray();
  }

  public function get_photos_pages_list(){
    $city_data = $this->db->table($this->table)
      ->select('images.*,cities.city_name as title')
      ->join('cities', 'cities.id = images.city_place_id')
      ->where('images.category', 'city')
      ->get()
      ->getResultArray();

    $place_data = $this->db->table($this->table)
      ->select('images.*,explore_uttarakhand.id as place_id,explore_uttarakhand.title')
      ->join('explore_uttarakhand', 'explore_uttarakhand.id = images.city_place_id', 'left')
      ->where('images.category', 'place')
      ->get()
      ->getResultArray();

    $combined_arr = array_merge($city_data, $place_data);

    return $combined_arr;
  }


  public function get_image_byid($id){
    return $this->db->table($this->table)
    ->where('id', $id)
    ->get()
    ->getRowArray();

  }

}
