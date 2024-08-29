<?php


namespace App\Controllers;

use App\Models\CitiesModel;
use App\Models\UttarakhandModel;
use App\Models\ImageModel;
use App\Models\AreaModel;
use App\Models\FoodModel;
use App\Models\BlogModel;
use App\Models\ContactModel;
use App\Models\SubscribersModel;
use App\Models\CommentModel;
use App\Models\LikesModel;

class ContactController extends BaseController
{
    public function __construct()
    {
        $this->citiesModel = new CitiesModel();
        $this->uttarakhandModel = new UttarakhandModel();
        $this->imageModel = new ImageModel();
        $this->areaModel = new AreaModel();
        $this->foodModel = new FoodModel();
        $this->blogModel = new BlogModel();
        $this->contactModel = new ContactModel();
        $this->subscribersModel = new SubscribersModel();
        $this->commentModel = new CommentModel();
        $this->likesModel = new LikesModel();
    }

    public function contact()
    {
        $data['cities'] = $this->citiesModel->Getcity();

        return view('frontend/includes/header', $data)
            . view('frontend/contact')
            . view('frontend/includes/footer');
    }




    public function insertContact()
    {


        $content = '
        <h2>Thank You for Contacting Us!</h2>
        <p>We appreciate your interest in Wolves Travel. Our team will review your message and get back to you as soon as possible.</p>
        <p>If you have any further questions or need immediate assistance, feel free to reach out to us at [Your Contact Information].</p>
        <p>Best regards,</p>
        <p>Wolves Travel Team</p>
    ';

        $name = $this->request->getVar('name');
        $email = $this->request->getVar('email');
        $subject = $this->request->getVar('subject');
        $message = $this->request->getVar('message');
        $contact_email = $email;

        $email_content = getEmailTemplate($content);
        $emailSent = sendMail($contact_email, $email_content);

        $data = [

            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        ];



        if ($this->contactModel->insert($data)) {

            if ($emailSent) {

                $response = array("status" => "success", "message" => "Your Enquery has Successfully send");
            } else {
                $response = array("status" => "error", "message" => "Email Not Sent");
            }
        } else {
            $response = array("status" => "error", "message" => "Somethink Went Wrong");
        }

        echo json_encode($response);
    }
    // start subscriber add

    public function addsubscribers()
    {


        $content = '
        <h2>Thank You for Subscribing!</h2>
        <p>We appreciate your interest in staying connected with us. You will now receive updates and exclusive content directly to your inbox.</p>
        <p>If you have any questions or feedback, feel free to reach out to us at [Your Contact Information].</p>
        <p>Best regards,</p>
        <p>[Wolves Travel]</p>
    ';




        $subscriber = $this->request->getVar('subscriber');


        $subscriberExists = $this->subscribersModel
        ->where('email', $subscriber)
        ->countAllResults();

        if ($subscriberExists > 0) {

            $response = array("status" => "error", "message" => "You Are a Already subscribe");
        } else {
            $email = $subscriber;

            $email_content = getEmailTemplate($content);
            $email_content;

            $emailSent = sendMail($email, $email_content);



            $data = [
                'email' => $subscriber,
            ];

            if ($this->subscribersModel->insert($data)) {

                if ($emailSent) {
                    $response = array("status" => "success", "message" => "Thanks For subscribe");
                } else {
                    $response = array("status" => "success", "message" => "email not Send");
                }
            } else {
                $response = array("status" => "error", "message" => "Somethink Went Wrong");
            }
        }

        echo json_encode($response);
    }

    // end subscriber add

    public function addcommnets()
    {

        $ip_address = getuserIpAddress();
        $blog_id = $this->request->getVar('blog_id');
        $name = $this->request->getVar('name');
        $email = $this->request->getVar('email');
        $comments = $this->request->getVar('message');

        $data = [
            'blog_id' => $blog_id,
            'user_ip' => $ip_address,
            'name' => $name,
            'email' => $email,
            'comment' => $comments

        ];

        if ($this->commentModel->insert($data)) {

            $response = array("status" => "success", "message" => "Your commnet has added");
        } else {
            $response = array("status" => "error", "message" => "Somethink Went Wrong");
        }

        echo json_encode($response);
    }

    public function addlikes()
    {
        $ip_address = getuserIpAddress();
        $blog_id = $this->request->getVar('blog_id');
        $like = $this->request->getVar('like');

        $data = [
            'blog_id' => $blog_id,
            'user_ip' => $ip_address
        ];

        if ($like == 1) {
            // Insert the like
            if ($this->likesModel->insert($data)) {
                $response = [
                    "status" => "success",
                    "message" => "Liked the blog"
                ];
            } else {
                $response = [
                    "status" => "error",
                    "message" => "Failed to like the blog"
                ];
            }
        } else {
            // Remove the like
            if ($this->likesModel->deletelikes($blog_id, $ip_address)) {
                $response = [
                    "status" => "error",
                    "message" => "Disliked the blog"
                ];
            } else {
                $response = [
                    "status" => "error",
                    "message" => "Failed to dislike the blog"
                ];
            }
        }

        echo json_encode($response);
    }



     /** show comment page by  admin */

     public function list_contact(){

        $data['contact'] = $this->contactModel->get_contact_data();

        return view('admin/includes/header')
            . view('admin/pages/contact_listing', $data)
            . view('admin/includes/footer');
    }

    /**
     * suscriber list show by admin
     */
    public function list_subscriber(){
        $data['subscriber'] = $this->subscribersModel->get_subscribers();

        return view('admin/includes/header')
        . view('admin/pages/subscriber_listing', $data)
        . view('admin/includes/footer');
    }





    


}


