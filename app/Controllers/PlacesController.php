<?php

namespace App\Controllers;

use App\Models\CitiesModel;
use App\Models\UttarakhandModel;
use App\Models\ImageModel;
use App\Models\AreaModel;
use App\Models\FoodModel;
use App\Models\BlogModel;


class PlacesController extends BaseController
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

   
     /**
     * get places page 
     */
    public  function get_place_page(){


        $data['cities'] = $this->citiesModel->Getcity();
        $data['random_city'] = $this->citiesModel->get_random_cities();
        $data['recentBlogs'] = $this->blogModel->getRecentBlogs(3);

        // echo "<pre>";
        // print_r($data['random_city'] );
        // die;

        return view('frontend/includes/header', $data)
            . view('frontend/places', $data)
            . view('frontend/includes/footer');

    }


    /**
     * search destination
     */
    public function searchDestination()  {
        $searchItem = $this->request->getvar('search');
        $searchItem = getAllDataBySearch($searchItem);

        return $this->response->setJSON($searchItem);
    }

   


}
