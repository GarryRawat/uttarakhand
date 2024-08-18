<?php

namespace App\Controllers;

use App\Models\UttarakhandModel;
use App\Models\CitiesModel;
use App\Models\ImageModel;
use App\Models\AreaModel;
use App\Models\FoodModel;
use App\Models\ContactModel;
use App\Models\SubscribersModel;

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
        $this->contact = new ContactModel();
        $this->subscriber = new SubscribersModel();
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
        if ($this->uttarakhandModel->insert($data)) {

            session()->setFlashdata('success', 'Record Added Successfully!');
        } else {
            session()->setFlashdata('error', 'Record Added Successfully!');
        }
        return redirect('listpagedetails');
    }

    // add image section

    public function AddimageData()
    {
        $data['city'] = $this->citiesModel->Getcity();
        $data['pages'] = $this->uttarakhandModel->GetAllPlaces();
    
        return view('admin/includes/header')
            . view('admin/pages/addPhotos', $data)
            . view('admin/includes/footer');
    }

    public function InsertimageData() {

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

        if ($this->imageModel->insertBatch($data)) {
            $response = array("status" => "success", "message" => "File uploaded successfully");
        } else {
            $response = array("status" => "error", "message" => "Upload failed");
        }
        
        echo json_encode($response);
    }

     /* listing pages photos  * */

     public function photos_listing(){
    
      $data['image_data']=$this->imageModel->get_photos_pages_list();

      echo "<pre>";
      print_r($data['image_data']);
      die;

        return view('admin/includes/header')
            . view('admin/pages/photos_listing')
            . view('admin/includes/footer');
     }


    //  show top food page

    public function ShowArea()   {

        $data['city'] = $this->citiesModel->Getcity();
        $data['pages'] = $this->uttarakhandModel->GetAllPlaces();

        return view('admin/includes/header', $data)
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
      
        if ($this->areaModel->insertBatch($data)) {
            $response = array("status" => "success", "message" => "file uploaded successfull");
        } else {
            $response = array("status" => "error", "message" => "not uploaded");
        }

        echo json_encode($response);
    }

    /** show admin food page */

    public function Showfoodpage(){


        $data['city'] = $this->citiesModel->Getcity();
        $data['pages'] = $this->uttarakhandModel->GetAllPlaces();

        return view('admin/includes/header', $data)
            . view('admin/pages/addfood')
            . view('admin/includes/footer');
    }

    /** Add multyple food photos by places and city */

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


    /** listing content pages data in admin */

    public function ListingPages() {


        $data['listing'] = $this->uttarakhandModel->getallPagesDatabySlug();
    
        return view('admin/includes/header')
            . view('admin/pages/ListingPages', $data)
            . view('admin/includes/footer');
    }

     /** Edit content pages Data  */
    public function Editallpages($id){
        $data['cities'] = $this->citiesModel->Getcity();
        $data['pagedata'] = $this->uttarakhandModel->getallpagesdatabyid($id);


        return view('admin/includes/header')
            . view('admin/pages/editallpages', $data)
            . view('admin/includes/footer');
    }


    /** update content pages  */

    public function updateallpages(){

        $id = $this->request->getvar('id');
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
        if ($this->uttarakhandModel->getAllPagesDataUpdateById($id, $data)) {
            $response = array("status" => "success", "message" => "Data Updated");
        } else {
            $response = array("status" => "error", "message" => "Not Updated");
        }

        echo json_encode($response);
    }

    /** detele content pages */

    public function deletepages() {

        $id = $this->request->getvar('id');
        if ($this->uttarakhandModel->delete($id)) {

            $response = array("status" => "success", "message" => "Your Page was Deleted");
        } else {
            $response = array("status" => "error", "message" => "item not delete");
        }

        echo json_encode($response);
    }


    /** show comment page by  admin */

    public function list_contact(){

        $data['contact'] = $this->contact->get_contact_data();

        return view('admin/includes/header')
            . view('admin/pages/contact_listing', $data)
            . view('admin/includes/footer');
    }

    /** show subscriber page by admin */

    public function list_subscriber(){
        $data['subscriber'] = $this->subscriber->get_subscribers();

        return view('admin/includes/header')
        . view('admin/pages/subscriber_listing', $data)
        . view('admin/includes/footer');
    }


}
