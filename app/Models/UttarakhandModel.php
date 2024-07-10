<?php

namespace App\Models;

use CodeIgniter\Model;

class UttarakhandModel extends Model
{
  protected $table = 'explore_uttarakhand';
  protected $primaryKey = 'id';
  protected $allowedFields = ['city_id', 'place', 'title', 'slug', 'about_title', 'long_description', 'short_description', 'all_image'];


  public function GetCityByid($id)
  {

    return $this->db->table($this->table)
      ->join('cities', 'cities.id = explore_uttarakhand.city_id')
      ->where('city_id', $id)
      ->get()
      ->getResultArray();
  }


  public function GetDatabyslug($slug)
  {

    return $this->db->table($this->table)
      ->where('slug', $slug)
      ->get()
      ->getRowArray();
  }
  public function GetAllPlaces()
  {

    return $this->db->table($this->table)
      ->get()
      ->getResultArray();
  }


  public function GetCityDatabyid($id)
  {
    return $this->db->table($this->table)
      ->where('city_id', $id)
      ->get()
      ->getResultArray();
  }


  public function GetDataByPlaceCity($id)
  {

    return $this->db->table($this->table)
     ->select('explore_uttarakhand.*,images.image,cities.city_name')
      ->join('images', 'explore_uttarakhand.id = images.city_place_id')
      ->join('cities', 'explore_uttarakhand.city_id = cities.id')
      ->where('explore_uttarakhand.city_id',$id)
      ->groupBy('explore_uttarakhand.place')
      ->get()
      ->getResultArray();
      
  }
}
