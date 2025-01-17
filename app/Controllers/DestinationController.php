<?php

namespace App\Controllers;
use App\Models\CitiesModel;
use App\Models\UttarakhandModel;
use App\Models\ImageModel;
use App\Models\AreaModel;
use App\Models\FoodModel;
use App\Models\BlogModel;
class DestinationController extends BaseController
{
    
    public function __construct()
    {

        $this->citiesModel = new CitiesModel();
        $this->uttarakhandModel = new UttarakhandModel();
        $this->imageModel = new ImageModel();
        $this->areaModel = new AreaModel();
        $this->foodModel = new FoodModel();
        $this->blogModel = new BlogModel();
    } 

    public function Destination()
    {
        $data['cities'] = $this->citiesModel->Getcity();
        $data['pages'] = $this->uttarakhandModel->GetAllPlaces();
        $data['random_city'] = $this->citiesModel->get_random_cities();
        $data['recentBlogs'] = $this->blogModel->getRecentBlogs(3);

        $data['placesData'] = $this->uttarakhandModel->get_all_places();
        
        // echo "<pre>";
        // print_r($data['placesData']);
        // die;
        
        $data['seo']=[
            'meta_title'=>'home',
            'meta_description'=>'home',
            'meta_keywords'=>'home'
        ];
        return view('frontend/includes/header',$data)
        .view('frontend/destination',$data)
        .view('frontend/includes/footer');
    }
    
    // 
    public function list()
    {
        $data['cities'] = $this->citiesModel->Getcity();
        $data['pages'] = $this->uttarakhandModel->GetAllPlaces();
        $data['random_city'] = $this->citiesModel->get_random_cities();
        $data['recentBlogs'] = $this->blogModel->getRecentBlogs(3);
        
        $data['seo']=[
            'meta_title'=>'home',
            'meta_description'=>'home',
            'meta_keywords'=>'home'
        ];
        return view('frontend/includes/header',$data)
        .view('frontend/hotel',$data)
        .view('frontend/includes/footer');
    }



}
