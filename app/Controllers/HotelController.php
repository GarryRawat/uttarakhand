<?php

namespace App\Controllers;
use App\Models\CitiesModel;
use App\Models\UttarakhandModel;
use App\Models\ImageModel;
use App\Models\AreaModel;
use App\Models\FoodModel;
use App\Models\BlogModel;
use App\Models\HotelModel;
use App\Models\RoomsCategoryModel;
use App\Models\RoomModel;
use App\Models\BookingModel;
use App\Models\Bookingitem;
use Config\Database;
class HotelController extends BaseController
{
    protected $db;
    public function __construct()
    {
       $this->db = \Config\Database::connect();
        $this->citiesModel = new CitiesModel();
        $this->uttarakhandModel = new UttarakhandModel();
        $this->imageModel = new ImageModel();
        $this->areaModel = new AreaModel();
        $this->foodModel = new FoodModel();
        $this->blogModel = new BlogModel();
        $this->hotelModel = new HotelModel();
        $this->roomsCategoryModel = new RoomsCategoryModel();
        $this->roomModel = new RoomModel();
        $this->bookingModel = new BookingModel();
        $this->bookingitem = new Bookingitem();
    } 

    
    // HOTELS
    public function viewHotels()
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
        
        $data['placesData'] = $this->uttarakhandModel->get_all_places();
        $data['allHotels'] = $this->hotelModel->findAll();
        // echo "<pre>";
        // print_r($data['allHotels']);
        // die;
        return view('frontend/includes/header',$data)
        .view('frontend/hotel',$data)
        .view('frontend/includes/footer');
    }


    public function hotalDetails($id){
         $data['cities'] = $this->citiesModel->Getcity();
        $data['pages'] = $this->uttarakhandModel->GetAllPlaces();
        $data['random_city'] = $this->citiesModel->get_random_cities();
        $data['recentBlogs'] = $this->blogModel->getRecentBlogs(3);
        
        $data['seo']=[
            'meta_title'=>'home',
            'meta_description'=>'home',
            'meta_keywords'=>'home'
        ];
        
        $data['hotalDetails'] = $this->hotelModel->find($id);
        $data['room_category'] = $this->roomsCategoryModel->findAll();
        return view('frontend/includes/header',$data)
        .view('frontend/hotel-details',$data)
        .view('frontend/includes/footer');

    }


    public function getroomCategory(){
        $id=$this->request->getVar('category_id');
        $builder = $this->db->table('rooms');
        $room_category = $builder->where('category_id', $id)->get()->getResultArray();
        return $this->response->setJSON([
            'status' => 'success',
            'data' => $room_category
        ]);
    }


    public function storeBooking()
    {
        $data = $this->request->getPost();
        $subtotal = preg_replace('/[^\d.]/', '', $data['subtotal']);

        $master_data = [
            'hotel_id'   => $data['hotal_id'],
            'user_ip'    => $this->request->getIPAddress(),
            'total_room' => $data['total_room'],
            'subtotal'  => $subtotal,
            'total_tax'  => 0, 
            'total_price'=> $subtotal
        ];

        // Insert into booking table
        if ($this->bookingModel->insert($master_data)) {
            $booking_id = $this->bookingModel->getInsertID();
            foreach ($data['persons'] as $index => $persons) {
                $duration = $data['duration'][$index] ?? 1;
                $booking_item = [
                    'booking_id' => $booking_id,
                    'room_id'    => 1, 
                    'persons'    => $persons,
                    'duration'   => $duration,
                ];
                $this->db->table('booking_item')->insert($booking_item);
            }
            // return $this->response->setJSON([
            //     'status' => 'success',
            //     'message' => 'Booking created successfully',
            //     'booking_id' => $booking_id
            // ]);
             return redirect()->to('/checkout-booking/' . $booking_id)->with('message', 'Booking successful!');
        }
       
    }
    
    public function checkoutBooking($id){

   $data['cities'] = $this->citiesModel->Getcity();
        $data['pages'] = $this->uttarakhandModel->GetAllPlaces();
        $data['random_city'] = $this->citiesModel->get_random_cities();
        $data['recentBlogs'] = $this->blogModel->getRecentBlogs(3);
        
        $data['seo']=[
            'meta_title'=>'home',
            'meta_description'=>'home',
            'meta_keywords'=>'home'
        ];
    
        $builder = $this->db->table('booking b');
        $builder->select('b.*, bi.persons, bi.duration, bi.room_id');
        $builder->join('booking_item bi', 'bi.booking_id = b.id');
        $builder->where('b.id', $id);
        $data['$booking_data'] = $builder->get()->getResultArray();

        // echo "<pre>";
        // print_r($data['$booking_data']);
        // die;

         return view('frontend/includes/header',$data)
        .view('frontend/checkout-booking',$data)
        .view('frontend/includes/footer');
    }






}
