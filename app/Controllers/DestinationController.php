<?php

namespace App\Controllers;

class DestinationController extends BaseController
{
    
    public function Destination()
    {
        return view('frontend/includes/header')
        .view('frontend/destination')
        .view('frontend/includes/footer');
    }
}
