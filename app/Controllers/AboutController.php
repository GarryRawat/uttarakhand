<?php

namespace App\Controllers;
use App\Models\CitiesModel;
use App\Models\UttarakhandModel;
use App\Models\ImageModel;
use App\Models\AreaModel;
use App\Models\FoodModel;
use App\Models\BlogModel;
class AboutController extends BaseController
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
    
    public function about()

    {
        $data['cities'] = $this->citiesModel->Getcity();


        return view('frontend/includes/header',$data)
        .view('frontend/about')
        .view('frontend/includes/footer');
    }

   
    

}
