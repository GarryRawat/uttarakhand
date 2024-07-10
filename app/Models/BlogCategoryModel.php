<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogCategoryModel extends Model
{
    protected $table = 'categories_blogs'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['blog_categories'];




    public function GetBlogCategories(){

      return $this->db->table($this->table)
      ->get()
      ->getResultArray();
    }

    
    // public function GetcityBYslug($slug){

    //   return $this->db->table($this->table)
    //   ->where('city_name',$slug)
    //   ->get()
    //   ->getRowArray();
    // }
    
  }
    

