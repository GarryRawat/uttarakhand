<?php

namespace App\Models;

use CodeIgniter\Model;

class HotelModel extends Model
{
    protected $table = 'hotel';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name',
        'room_capacity',
        'location',
        'description',
        'image'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';



    
}
