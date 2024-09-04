<?php

namespace App\Controllers;

use App\Models\CitiesModel;
use App\Models\UttarakhandModel;
use App\Models\ImageModel;
use App\Models\AreaModel;
use App\Models\FoodModel;
use App\Models\BlogModel;


class HomeController extends BaseController
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

    public function home(){

        $this->request->setLocale('en');
        $data['cities'] = $this->citiesModel->Getcity();
        $data['pages'] = $this->uttarakhandModel->GetAllPlaces();
        $data['recentBlogs'] = $this->blogModel->getRecentBlogs(3);
        
        $data['seo']=[
            'meta_title'=>'home',
            'meta_description'=>'home',
            'meta_keywords'=>'home'
        ];

        return view('frontend/includes/header', $data)
            . view('frontend/home', $data)
            . view('frontend/includes/footer');
    }

    public function GetPages() {
        $id = $this->request->getvar('id');
        $data['cityDetails'] = $this->uttarakhandModel->GetCityByid($id);

        return $this->response->setJSON($data);
    }

    /**
     * city Pages
     */
    public function Mainpage($slug){

        $data['cities'] = $this->citiesModel->Getcity();
        $data['recentBlogs'] = $this->blogModel->getRecentBlogs(3);
        $data['city'] = $this->citiesModel->GetcityBYslug($slug);
        $data['CityPlaceData'] = $this->uttarakhandModel->GetDataByPlaceCity($data['city']['id']);
        $data['slugdetails'] = $this->uttarakhandModel->GetCityDatabyid($data['city']['id']);
        $data['images'] = $this->imageModel->GetImagesbyid('city', $data['city']['id']);
        $data['allfoodimg'] = $this->foodModel->GetimagebyFood('city', $data['city']['id']);

        $data['seo'] =  $data['city'];

        return view('frontend/includes/header', $data)
            . view('frontend/allpages/mainpages', $data)
            . view('frontend/includes/footer');
    }

    /**
     * place Pages
     */
    public function page($city, $slug){
        $data['cities'] = $this->citiesModel->Getcity();
        $data['slugdetails'] = $this->uttarakhandModel->GetDatabyslug($slug);
        $data['recentBlogs'] = $this->blogModel->getRecentBlogs(3);
        $data['images'] = $this->imageModel->GetImagesbyid('place', $data['slugdetails']['id']);
        $data['areaimage'] = $this->areaModel->Getareabyid('place', $data['slugdetails']['id']);
        $data['allfoodimg'] = $this->foodModel->GetimagebyFood('place', $data['slugdetails']['id']);

        $data['seo'] =  $data['slugdetails'];

        return view('frontend/includes/header', $data)
            . view('frontend/allpages/innerplacepage', $data)
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


    /**
     * get places page 
     */

    public  function get_place_page($city,$slug){

        $data['cities'] = $this->citiesModel->Getcity();
        $data['slugdetails'] = $this->uttarakhandModel->GetDatabyslug($slug);
        $data['recentBlogs'] = $this->blogModel->getRecentBlogs(3);
        $data['images'] = $this->imageModel->GetImagesbyid('place', $data['slugdetails']['id']);
        $data['areaimage'] = $this->areaModel->Getareabyid('place', $data['slugdetails']['id']);
        $data['allfoodimg'] = $this->foodModel->GetimagebyFood('place', $data['slugdetails']['id']);

        return view('frontend/includes/header', $data)
            . view('frontend/places', $data)
            . view('frontend/includes/footer');

    }



}
