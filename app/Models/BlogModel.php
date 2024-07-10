<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blogs'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['category_id','blog_title','slug','short_description','long_description','author','views','likes','blog_image'];

  
    

    public function GetAllBlog(){
      
      return $this->db->table($this->table)
      ->get()->getResultArray();
    }


    public function GetBlogsById($id){


      return $this->db->table($this->table)
      ->where('id',$id)
      ->get()
      ->getRowArray();

    }


    public function UpdateBlogs($id,$data){

      return $this->db->table($this->table)
      ->where('id',$id)
      ->update($data);
    }


    
  }
    

