<?php

namespace App\Controllers;

use App\Models\CitiesModel;
use App\Models\UttarakhandModel;
use App\Models\ImageModel;
use App\Models\AreaModel;
use App\Models\FoodModel;


class HomeController extends BaseController
{

    public function __construct()
    {
        $this->citiesModel = new CitiesModel();
        $this->uttarakhandModel = new UttarakhandModel();
        $this->imageModel = new ImageModel();
        $this->areaModel = new AreaModel();
        $this->foodModel = new FoodModel();
    }

    public function home()
    {

        $data['cities'] = $this->citiesModel->Getcity();



        return view('frontend/includes/header', $data)
            . view('frontend/home')
            . view('frontend/includes/footer');
    }

    public function GetPages()
    {
        $id = $this->request->getvar('id');
        $data['cityDetails'] = $this->uttarakhandModel->GetCityByid($id);

        return $this->response->setJSON($data);
    }



    public function page($city, $slug)
    {

        $data['cities'] = $this->citiesModel->Getcity();
        $data['slugdetails'] = $this->uttarakhandModel->GetDatabyslug($slug);
        $data['images'] = $this->imageModel->GetImagesbyid('place', $data['slugdetails']['id']);
        $data['areaimage'] = $this->areaModel->Getareabyid('place', $data['slugdetails']['id']);
        $data['allfoodimg'] = $this->foodModel->GetimagebyFood('place', $data['slugdetails']['id']);

        // echo "<pre>";
        // print_r($data['images']);
        // "<pre>";
        // die;


        return view('frontend/includes/header', $data)
            . view('frontend/allpages/innerplacepage', $data)
            . view('frontend/includes/footer');
    }






    public function Mainpage($slug)
    {

      

        $data['cities'] = $this->citiesModel->Getcity();
       
        $data['city'] = $this->citiesModel->GetcityBYslug($slug);
        $data['CityPlaceData'] = $this->uttarakhandModel->GetDataByPlaceCity($data['city']['id']);
        $data['slugdetails'] = $this->uttarakhandModel->GetCityDatabyid($data['city']['id']);
        $data['images'] = $this->imageModel->GetImagesbyid('city',$data['city']['id']);
        // $data['areaimage'] = $this->areaModel->Getareabyid('city', $data['slugdetails']['id']);
        $data['allfoodimg'] = $this->foodModel->GetimagebyFood('city',$data['city']['id']);
   


//  echo "<pre>";
//  print_r($data['city']);
//  print_r($data['CityPlaceData']);
//  print_r($data['images']);
//  print_r($data['images']);
//  print_r($data['allfoodimg']);
//  "</pre>";
//  die;

        return view('frontend/includes/header', $data)
            . view('frontend/allpages/mainpages',$data)
            . view('frontend/includes/footer');
    }
}
