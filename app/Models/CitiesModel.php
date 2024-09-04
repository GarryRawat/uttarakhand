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

    
    // public function get_random_cities() {
    // return $this->db->table('cities')
    //       ->select('cities.*, images.*')  
    //       ->join('images', 'images.city_place_id = cities.id')
    //       ->where('images.category', 'city')
    //       ->limit()
    //       ->get()
    //       ->getResultArray();   
    
    //  $subquery = $this->db->table('images')
    //     ->select('id')
    //     ->where('category', 'city')
    //     ->groupBy('city_place_id')
    //     ->orderBy('RAND()') // Random order
    //     ->limit(1)
    //     ->getCompiledSelect();

    // Main query to get city details and join with the random image
  //   return $this->db->table('cities')
  //       ->select('cities.*, images.*')
  //       ->join('images', 'images.id IN (' . $subquery . ')')
  //       ->join('images', 'images.city_place_id = cities.id')
  //       ->get()
  //       ->getResultArray();
               
  // }

  public function get_random_cities() {
    $builder = $this->db->table('cities');
    
    $subQuery = $this->db->table('images')
        ->select('images.city_place_id, images.image')
        ->where('images.category', 'city')
        ->groupBy('images.city_place_id')
        // ->orderBy('RAND()')
        ->limit(1)
        ->getCompiledSelect();

  
    $query = $builder->select('cities.*, images.image')
        ->join("($subQuery) as images", 'images.city_place_id = cities.id', 'left')
        ->get()
        ->getResultArray();

    return $query;
}

  
  
    
  }
    

