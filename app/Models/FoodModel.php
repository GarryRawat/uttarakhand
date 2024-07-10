<?php

namespace App\Models;

use CodeIgniter\Model;

class FoodModel extends Model
{
  protected $table = 'foods';
  protected $primaryKey = 'id';
  protected $allowedFields = ['category', 'city_place_id', 'top_foods', 'food_images', 'created_at', 'updated-on'];




  public function GetimagebyFood($category, $id)
  {

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
}
