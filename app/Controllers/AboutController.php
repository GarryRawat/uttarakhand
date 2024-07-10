<?php

namespace App\Controllers;

class AboutController extends BaseController
{
    
    public function about()
    {
        return view('frontend/includes/header')
        .view('frontend/about')
        .view('frontend/includes/footer');
    }
}
