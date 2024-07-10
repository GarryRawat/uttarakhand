<?php

namespace App\Controllers;

use App\Models\UttarakhandModel;
use App\Models\CitiesModel;
use App\Models\ImageModel;
use App\Models\AreaModel;
use App\Models\FoodModel;

class AdminController extends BaseController
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
    }


    public function Adminindex()
    {
        return view('admin/includes/header')
            . view('admin/pages/index')
            . view('admin/includes/footer');
    }



    // show page all data

    public function InsertDetails()
    {

        $data['cities'] = $this->citiesModel->Getcity();

        return view('admin/includes/header')
            . view('admin/pages/insertDetails', $data)
            . view('admin/includes/footer');
    }

    // add page data

    public function AddpageData()
    {
        $city_name = $this->request->getvar('city_name');
        $place = $this->request->getvar('place');
        $title = $this->request->getvar('title');
        $slug = str_replace(' ', '-', $this->request->getvar('title'));
        $about_title = $this->request->getvar('about_title');
        $long_description = $this->request->getvar('long_description');
        $short_description = $this->request->getvar('short_description');

        $data = [
            'city_id' => $city_name,
            'place' => $place,
            'title' => $title,
            'slug' => $slug,
            'about_title' => $about_title,
            'short_description' => $short_description,
            'long_description' => $long_description,

        ];
        //  echo "<pre>";
        //  print_r($data);
        //  echo "</pre>";
        //  die();

        if ($this->uttarakhandModel->insert($data)) {

            session()->setFlashdata('message', 'data insert successfully');
            return redirect('insertDetails');
            $response = array("status" => "success", "message" => "Data inserted successfully");
        } else {
            $response = array("status" => "error", "message" => "Product not added");
            // session()->setFlashdata('message', 'product not add ');
        }

        echo json_encode($response);
    }

    // add image section

    public function AddimageData()
    {
        $data['city'] = $this->citiesModel->Getcity();
        $data['pages'] = $this->uttarakhandModel->GetAllPlaces();
        // echo "<pre>";
        // print_r($data['pages']);
        // "</pre>";
        // die;
        return view('admin/includes/header')
            . view('admin/pages/addPhotos', $data)
            . view('admin/includes/footer');
    }

    public function InsertimageData()
    {

        if (!empty($_FILES)) {
            $targetDir = "uploads/";
            $fileNames = [];
        }


        $option = $this->request->getVar('option');
        $city_page_id = $option === 'city' ? $this->request->getVar('city_id') : $this->request->getVar('place_id');
        foreach ($_FILES['file']['name'] as $key => $name) {
            $targetFile = $targetDir . basename($name);
            if (move_uploaded_file($_FILES['file']['tmp_name'][$key], $targetFile)) {
                $fileNames[] = $name;
            }
            $data[] = [
                'category' => $option,
                'city_place_id' => $city_page_id,
                'image' => $name
            ];
        }
        // print_r($data);
        if ($this->imageModel->insertBatch($data)) {
            $response = array("status" => "success", "message" => "file uploaded successfull");
        } else {
            $response = array("status" => "error", "message" => "not uploaded");
        }

        echo json_encode($response);
    }


    //  show top food page
     
    public function ShowArea()
    {

        $data['city'] = $this->citiesModel->Getcity();
        $data['pages'] = $this->uttarakhandModel->GetAllPlaces();



        return view('admin/includes/header',$data)
        . view('admin/pages/addarea')
        . view('admin/includes/footer');
    }


    // add area data

    public function InsertareaData()
    {

        if (!empty($_FILES)) {
            $targetDir = "uploads/";
            $fileNames = [];
        }


        $option = $this->request->getVar('option');
        $top_food = $this->request->getVar('top_food');
        $city_page_id = $option === 'city' ? $this->request->getVar('city_id') : $this->request->getVar('place_id');
        $top_place = $this->request->getVar('top_place');
        foreach ($_FILES['file']['name'] as $key => $name) {
            $targetFile = $targetDir . basename($name);
            if (move_uploaded_file($_FILES['file']['tmp_name'][$key], $targetFile)) {
                $fileNames[] = $name;
            }
            $data[] = [
                'category' => $option,
                'city_place_id' => $city_page_id,
                'top_places' => $top_place,
                'top_food' => $top_food,
                'area_images' => $name
            ];

            
        }
        // echo "<pre>";
        // print_r($data);
        //  "</pre>";
        //  die;
        if ($this->areaModel->insertBatch($data)) {
            $response = array("status" => "success", "message" => "file uploaded successfull");
        } else {
            $response = array("status" => "error", "message" => "not uploaded");
        }

        echo json_encode($response);
    }






public function Showfoodpage(){

   
    $data['city'] = $this->citiesModel->Getcity();
    $data['pages'] = $this->uttarakhandModel->GetAllPlaces();



    return view('admin/includes/header',$data)
    . view('admin/pages/addfood')
    . view('admin/includes/footer');
}


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
        // echo "<pre>";
        // print_r($data);
        //  "</pre>";
        //  die;
        if ($this->foodModel->insertBatch($data)) {
            $response = array("status" => "success", "message" => "file uploaded successfull");
        } else {
            $response = array("status" => "error", "message" => "not uploaded");
        }

        echo json_encode($response);
    }
}
