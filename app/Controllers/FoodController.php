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

    /**
     * Show food listing page 
     */
    public function get_food_listing(){

        $data['food_img']=$this->foodModel->get_foods_pages_list();
        $data['city'] = $this->citiesModel->Getcity();
        $data['places'] = $this->uttarakhandModel->GetAllPlaces();
            
        return view('admin/includes/header', $data)
            . view('admin/pages/food_photos_listing',$data)
            . view('admin/includes/footer');

    }

    /**
     * get food photos by id 
     */

     public function get_food_image_by_id($id) {
        $food_photos = $this->foodModel->get_food_photos_by_id($id);
    
        if ($food_photos) {
            return $this->response->setJSON($food_photos);
        } else {
            return $this->response->setJSON(['error' => 'No data found'])->setStatusCode(404);
        }
    }

    /**
     * update food photos in city and places
     */

     public function update_food_image() {

        $id = $this->request->getVar('image_id');
        $top_foods= $this->request->getVar('top_foods');
        $city_place_id = $this->request->getVar('city_place_id');
        $file = $this->request->getFile('file');

        // print_r($_POST);
        // die;
     
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move(FCPATH . 'uploads/', $newName);
            }else{
                $newName="";
            }
     
        $data = [
            'id'=>$id,
            'top_foods'=>$top_foods,
            'city_place_id' => $city_place_id,
            'food_images' => $newName
        ];

        // print_r($data);
        // die;

    

        if ($this->foodModel->update_record($id, $data)) {
            $response = ["status" => "success", "message" => "Record Updated Successfully"];
     
        } else {
            $response = ["status" => "error", "message" => "Record Not Updated"];
        }   
       echo json_encode($response);
  }

   /**
   * delete pages photos
   */

   public function delete_food_images(){

    $id = $this->request->getvar('id');
    if ($this->foodModel->delete($id)) {

        $response = array("status" => "success", "message" => "food Delete");
    } else {
        $response = array("status" => "error", "message" => "item not delete");
    }

    echo json_encode($response);

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
