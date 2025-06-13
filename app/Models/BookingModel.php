<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'hotel_id',
        'user_ip',
        'total_room',
        'subtotal',
        'total_tax',
        'total_price',

    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';



    
}
