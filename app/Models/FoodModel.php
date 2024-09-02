<?php

namespace App\Models;

use CodeIgniter\Model;

class FoodModel extends Model
{
  protected $table = 'foods';
  protected $primaryKey = 'id';
  protected $allowedFields = ['category', 'city_place_id', 'top_foods', 'food_images', 'created_at', 'updated-on'];




  public function GetimagebyFood($category, $id){
    $imagesArr = [];
    $foodImages = $this->db->table($this->table)
      ->select('*')
      ->where('category', $category)
      ->where('city_place_id', $id)
      ->orderBy('top_foods')
      ->get()
      ->getResultArray();

    // Group images by 'top_foods'
    $imagesArr = [];
    foreach ($foodImages as $foodImage) {
      $topFood = $foodImage['top_foods'];
      if (!isset($imagesArr[$topFood])) {
        $imagesArr[$topFood] = [];
      }
      $imagesArr[$topFood][] = $foodImage;


    }
  
    return $imagesArr;


  }

  /** 
   * fectch food photos
   */

   public function get_foods_pages_list(){
    $city_data = $this->db->table($this->table)
      ->select('foods.*,cities.city_name as title')
      ->join('cities', 'cities.id = foods.city_place_id')
      ->where('foods.category', 'city')
      ->get()
      ->getResultArray();

    $place_data = $this->db->table($this->table)
      ->select('foods.*,explore_uttarakhand.id as place_id,explore_uttarakhand.title')
      ->join('explore_uttarakhand', 'explore_uttarakhand.id = foods.city_place_id', 'left')
      ->where('foods.category', 'place')
      ->get()
      ->getResultArray();

    $combined_arr = array_merge($city_data, $place_data);

    return $combined_arr;
  }

  /**
   * get food pages by id 
   */

   public function get_food_photos_by_id($id){
  return  $this->db->table($this->table)
    ->where('id', $id)
    ->get()
    ->getRowArray();
  }


  public function update_record($id, $data) {
    return $this->db->table($this->table) 
        ->where('id', $id)
        ->update($data);
}





}
