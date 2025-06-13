<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomsCategoryModel extends Model
{
    protected $table = 'room_category';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'category_name',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';



    
}
