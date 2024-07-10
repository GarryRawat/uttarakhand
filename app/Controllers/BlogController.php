<?php

namespace App\Controllers;

use App\Models\BlogCategoryModel;
use App\Models\BlogModel;
use App\Models\CitiesModel;

class BlogController extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }


    public function __construct()
    {
        $this->blogcategoryModel = new BlogCategoryModel();
        $this->blogModel = new BlogModel();
        $this->citiesModel = new CitiesModel();
    }

    public function ShowBlogs()
    {


        $data['blog_category'] = $this->blogcategoryModel->GetBlogCategories();

        // echo "<pre>";
        // print_r($data);
        return view('admin/includes/header')
            . view('admin/pages/addblogs', $data)
            . view('admin/includes/footer');
    }


    public function AddBlogs()
    {



        $blog_category = $this->request->getvar('blog_category');
        $blog_title = $this->request->getvar('blog_title');
        $slug = str_replace(' ', '-', $this->request->getvar('blog_title'));
        $author = $this->request->getvar('author');
        $long_description = $this->request->getvar('long_description');
        $short_description = $this->request->getvar('short_description');
        $blog_image = $this->request->getFile('blog_image');

        if ($blog_image->isValid() && !$blog_image->hasMoved()) {
            $blogImage = $blog_image->getRandomname();
            $blog_image->move(APPPATH . '../uploads', $blogImage);


            $data = [
                'category_id' => $blog_category,
                'blog_title' => $blog_title,
                'slug' => $slug,
                'author' => $author,
                'short_description' => $short_description,
                'long_description' => $long_description,
                'blog_image' => $blogImage
            ];



            if ($this->blogModel->insert($data)) {

                $response = array("status" => "success", "message" => "Data insert the table");
                return redirect('listblog');
            } else {
                $response = array("status" => "errir", "message" => "Data not inserted");
            }
        }

        echo json_encode($response);
    }


    public function ListBlog()
    {


        $data['allblogs'] = $this->blogModel->GetAllBlog();

        //   echo "<pre>";
        //   print_r($data);
        //   die;


        return view('admin/includes/header')
            . view('admin/pages/listingblog', $data)
            . view('admin/includes/footer');
    }


    public function EditBlogs($id)
    {


        $data['blog_category'] = $this->blogcategoryModel->GetBlogCategories();
        $data['blog'] = $this->blogModel->GetBlogsById($id);

        //   echo "<pre>";
        //   print_r($data['getDatabyid']);
        //   die;


        return view('admin/includes/header')
            . view('admin/pages/editblogs', $data)
            . view('admin/includes/footer');
    }


    public  function UpdateBlogs()
    {


       
        $id = $this->request->getvar('id');
        $blog_category = $this->request->getvar('blog_category');
        $blog_title = $this->request->getvar('blog_title');
        $slug = str_replace(' ', '-', $this->request->getvar('blog_title'));
        $author = $this->request->getvar('author');
        $long_description = $this->request->getvar('long_description');
        $short_description = $this->request->getvar('short_description');
        $blog_image = $this->request->getFile('blog_image');

        if ($blog_image->isValid() && !$blog_image->hasMoved()) {
            // Handle new image upload
            $blogImage = $blog_image->getRandomName();
            $blog_image->move(APPPATH . '../uploads', $blogImage);
        
            $data = [
                'category_id' => $blog_category,
                'blog_title' => $blog_title,
                'slug' => $slug,
                'author' => $author,
                'short_description' => $short_description,
                'long_description' => $long_description,
                'blog_image' => $blogImage
            ];
        } else {
            // Handle update without changing the image
            $data = [
                'category_id' => $blog_category,
                'blog_title' => $blog_title,
                'slug' => $slug,
                'author' => $author,
                'short_description' => $short_description,
                'long_description' => $long_description
            ];
        }

            // echo "<pre>";
            // print_r($data);
            // die;


            $this->blogModel->UpdateBlogs($id, $data);

            $response = array("status" => "success", "message" => "Data insert the table");
            return redirect('listblog');

            echo json_encode($response);
        }
    
    



    // delete blogs

    public function DeleteBlog()
    {


        $id = $this->request->getvar('id');


        if ($this->blogModel->delete($id)) {

            $response = array("status" => "success", "message" => "blog Delete");
        } else {
            $response = array("status" => "error", "message" => "item not delete");
        }

        echo json_encode($response);
    }







    public function ShowBLogPage()
    {



        $data['cities'] = $this->citiesModel->Getcity();
        $data['allblogs'] = $this->blogModel->GetAllBlog();
        // echo "<pre>";
        // print_r($data['allblogs']);
        // die;

        return view('frontend/includes/header', $data)
            . view('frontend/blog',$data)
            . view('frontend/includes/footer');
    }
}
