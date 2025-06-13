<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomModel extends Model
{
    protected $table = 'rooms';
    protected $primaryKey = 'id';

   protected $fillable = [
        'hotel_id',
        'category_id',
        'room_type',
        'description',
        'price_per_night',
        'currency',
        'max_persons',
        'total_rooms',
        'amenities',
        'image',
        'created_at',
        'updated_at',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';



    
}
