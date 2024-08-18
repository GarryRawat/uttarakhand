<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
  protected $table = 'blogs';
  protected $primaryKey = 'id';
  protected $allowedFields = ['category_id', 'blog_title', 'slug', 'short_description', 'long_description', 'author', 'views', 'likes', 'blog_image'];



  public function GetAllBlog()
  {
      return $this->db->table($this->table)
          ->select('blogs.*, COUNT(DISTINCT user_comments.id) as comment_count, COUNT(DISTINCT blog_likes.id) as like_count')
          ->join('user_comments', 'user_comments.blog_id = blogs.id', 'left')
          ->join('blog_likes', 'blog_likes.blog_id = blogs.id', 'left')
          ->groupBy('blogs.id')
          ->get()
          ->getResultArray();
  }
  
  
  

  public function GetBlogsById($id)
  {


    return $this->db->table($this->table)
      ->where('id', $id)
      ->get()
      ->getRowArray();
  }


  public function UpdateBlogs($id, $data)
  {

    return $this->db->table($this->table)
      ->where('id', $id)
      ->update($data);
  }


  public function getlimtblogs($limit, $offset)
  {

    return $this->db->table($this->table)
      ->select('*')
      ->limit($limit)
      ->offset($offset)
      ->orderBy('id', 'DESC')
      ->get()
      ->getResultArray();
  }

  public function getCountallblog()
  {
    $count = $this->db->table($this->table)
      ->SELECT('blogs')
      ->countAllResults();
    return $count;
  }

  public function getBlogsbyslug($slug)
  {
    return $this->db->table($this->table)
      ->where('slug', $slug)
      ->get()
      ->getRowArray();
  }



  public function getRecentBlogs($limit)
  {
    return $this->db->table('blogs')
      ->select('*')
      ->orderBy('created_at', 'DESC')
      ->limit($limit)
      ->get()
      ->getResultArray();
  }

  public function getBlogsRandomImg($limit = 10)
  {

    return $this->db->table('blogs')
      ->select('*')
      ->orderBy('RAND()')
      ->limit($limit)
      ->get()
      ->getResultArray();
  }

  public function incrementBlogView($slug)
  {
     - $this->db->table($this->table)
      ->set('views', 'views + 1', FALSE)
      ->where('slug', $slug)
      ->update();
  }


  
 
}
