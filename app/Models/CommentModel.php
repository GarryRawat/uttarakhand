<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
  protected $table = 'user_comments';
  protected $primaryKey = 'id';
  protected $allowedFields = ['user_ip', 'blog_id', 'name', 'email', 'comment', 'created_at', 'updated_at'];




  public function getcommentsbyid($id){
    return $this->db->table($this->table)
                    ->where('blog_id', $id)
                    ->get()
                    ->getResultArray();
  }


}
