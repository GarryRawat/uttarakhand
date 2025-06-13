<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingItem extends Model
{
    protected $table = 'booking_item';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'booking_id',
        'room_id',
        'persons',
        'duration'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';



    
}
