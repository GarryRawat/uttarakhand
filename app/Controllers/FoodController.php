<?php

namespace App\Controllers;

use App\Models\UttarakhandModel;
use App\Models\CitiesModel;
use App\Models\ImageModel;
use App\Models\AreaModel;
use App\Models\FoodModel;
use App\Models\ContactModel;
use App\Models\SubscribersModel;

class FoodController extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }

    public function __construct()
    {
        $this->uttarakhandModel = new UttarakhandModel();
        $this->citiesModel = new CitiesModel();
        $this->imageModel = new ImageModel();
        $this->areaModel = new AreaModel();
        $this->foodModel = new FoodModel();
        $this->contact = new ContactModel();
        $this->subscriber = new SubscribersModel();
    }


    /** show admin food page */
    public function Showfoodpage(){
        $data['city'] = $this->citiesModel->Getcity();
        $data['pages'] = $this->uttarakhandModel->GetAllPlaces();

        return view('admin/includes/header', $data)
            . view('admin/pages/addfood')
            . view('admin/includes/footer');
    }


    public function get_food_listing(){

        $data['food_data']=$this->foodModel->get_foods_pages_list();
        
        return view('admin/includes/header', $data)
            . view('admin/pages/food_listing')
            . view('admin/includes/footer');

    }

     /*
      * Add multyple food photos by places and city
      */

    public function InsertmultyData(){

        if (!empty($_FILES)) {
            $targetDir = "uploads/";
            $fileNames = [];
        }
        $option = $this->request->getVar('option');
        $top_food = $this->request->getVar('top_food');
        $city_page_id = $option === 'city' ? $this->request->getVar('city_id') : $this->request->getVar('place_id');
        foreach ($_FILES['file']['name'] as $key => $name) {
            $targetFile = $targetDir . basename($name);
            if (move_uploaded_file($_FILES['file']['tmp_name'][$key], $targetFile)) {
                $fileNames[] = $name;
            }
            $data[] = [
                'category' => $option,
                'city_place_id' => $city_page_id,
                'top_foods' => $top_food,
                'food_images' => $name
            ];
        }
        if ($this->foodModel->insertBatch($data)) {
            $response = array("status" => "success", "message" => "file uploaded successfull");
        } else {
            $response = array("status" => "error", "message" => "not uploaded");
        }

        echo json_encode($response);
    }
}
