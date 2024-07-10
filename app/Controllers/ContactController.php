<?php

namespace App\Controllers;

class ContactController extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }

    public function contact()
    {
        return view('frontend/includes/header')
        .view('frontend/contact')
        .view('frontend/includes/footer');
    }
}
