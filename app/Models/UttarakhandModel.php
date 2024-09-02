<?php

namespace App\Models;

use CodeIgniter\Model;

class UttarakhandModel extends Model
{
  protected $table = 'explore_uttarakhand';
  protected $primaryKey = 'id';
  protected $allowedFields = ['city_id', 'place', 'title', 'slug', 'about_title', 'long_description', 'short_description','meta_title','meta_keyword','meta_description','all_image'];


  public function GetCityByid($id){
    return $this->db->table($this->table)
      ->join('cities', 'cities.id = explore_uttarakhand.city_id')
      ->where('city_id', $id)
      ->get()
      ->getResultArray();
  }


  public function GetDatabyslug($slug){

    return $this->db->table($this->table)
      ->where('slug', $slug)
      ->get()
      ->getRowArray();
  }


  public function GetAllPlaces() {

    return $this->db->table($this->table)
      ->get()
      ->getResultArray();
  }


  public function GetCityDatabyid($id){
    return $this->db->table($this->table)
      ->where('city_id', $id)
      ->get()
      ->getResultArray();
  }


  public function GetDataByPlaceCity($id) {
    return $this->db->table($this->table)
      ->select('explore_uttarakhand.*,images.image,cities.city_name')
      ->join('images', 'explore_uttarakhand.id = images.city_place_id')
      ->join('cities', 'explore_uttarakhand.city_id = cities.id')
      ->where('explore_uttarakhand.city_id', $id)
      ->groupBy('explore_uttarakhand.place')
      ->get()
      ->getResultArray();
  }




  
  public function getallPagesDatabySlug() {
    return $this->db->table($this->table)
        ->select($this->table . '.*, cities.city_name') 
        ->join('cities', 'cities.id = ' . $this->table . '.city_id')
        ->get()
        ->getResultArray();
}




  public function getallpagesdatabyid($id){

    return $this->db->table($this->table)
    ->where('id',$id)
    ->get()
    ->getRowArray();
  }


  
  public function getAllPagesDataUpdateById($id, $data) {
    return $this->db->table($this->table)
                    ->where('id', $id)
                    ->update($data);
}

 
}
