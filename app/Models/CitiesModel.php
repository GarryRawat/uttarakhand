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

    

    /**
     * random cities for places page 
     */
  public function get_random_cities() {
    $query= $this->db->table('cities')
                     ->select('cities.id,cities.city_name,cities.meta_title')
                     ->get()
                     ->getResultArray();

                    $arr=[];
                    
     foreach($query as $data):
        $img=$this->db->table('images')
        ->select('image')
        ->where('category','city')
        ->where('city_place_id',$data['id'])
        ->orderBy('RAND()')
        ->get()
        ->getRowArray();
       
        if($img){
          $image=$img['image'];
        }
        else{
          $image='no_image.jpg';
        }
          $arr[]=[
            'city_id'=>$data['id'],
            'city'=>$data['city_name'],
            'meta_title'=>$data['meta_title'],
            'city_image'=>$image
          ];
        
      endforeach;
    return $arr;  
   }

}
    

