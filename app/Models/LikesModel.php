<?php

namespace App\Models;

use CodeIgniter\Model;

class LikesModel extends Model
{
  protected $table = 'blog_likes';
  protected $primaryKey = 'id';
  protected $allowedFields = ['user_ip', 'blog_id', 'likes',  'created_at', 'updated_at'];


  

  public function checkBlogLiked($user_ip, $blog_id)
  {
    $query = $this->db->table($this->table)
      ->where('blog_id', $blog_id)
      ->where('user_ip', $user_ip)
      ->countAllResults();
    if ($query > 0) {
      return true;
    } else {
      return false;
    }
  }


  public function deletelikes($blog_id, $user_ip) {
    return $this->db->table($this->table)
        ->where('blog_id', $blog_id)
        ->where('user_ip', $user_ip)
        ->delete();
}

}
