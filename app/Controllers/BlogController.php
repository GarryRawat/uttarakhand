<?php

namespace App\Controllers;

use App\Models\BlogCategoryModel;
use App\Models\BlogModel;
use App\Models\CitiesModel;
use App\Models\CommentModel;
use App\Models\LikesModel;

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
        $this->commentModel = new CommentModel();
        $this->likesModel = new LikesModel();
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

                // sendMailforsubscriber($data,'blog');

                $response = array("status" => "success", "message" => "Data insert the table");
                return redirect('listblog');
            } else {
                $response = array("status" => "error", "message" => "Data not inserted");
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
            $data = [
                'category_id' => $blog_category,
                'blog_title' => $blog_title,
                'slug' => $slug,
                'author' => $author,
                'short_description' => $short_description,
                'long_description' => $long_description
            ];
        }
            $this->blogModel->UpdateBlogs($id, $data);

            $response = array("status" => "success", "message" => "Data insert the table");
            return redirect('listblog');

            echo json_encode($response);
        }
    

    // delete blogs

    public function DeleteBlog() {

        $id = $this->request->getvar('id');
        if ($this->blogModel->delete($id)) {

            $response = array("status" => "success", "message" => "blog Delete");
        } else {
            $response = array("status" => "error", "message" => "item not delete");
        }

        echo json_encode($response);
    }

    public function ShowBLogPage($pages=null){

        $limit = 6;
        $pages = $this->request->getGet('page') ? intval($this->request->getGet('page')) : 1; 
        $offset = ($pages - 1) * $limit;

        $citiesModel = new CitiesModel();
        $blogModel = new BlogModel();
        $blog_id= $this->request->getvar('id');

        $data['cities'] = $citiesModel->Getcity();
        $data['random_img'] = $blogModel->getBlogsRandomImg();
        $data['allblogs'] = $blogModel->GetAllBlog();
     
        $data['limitblog'] = $blogModel->getlimtblogs($limit, $offset);
        $data['blogcount'] = $blogModel->getCountallblog();
        $data['totalPages'] = ceil($data['blogcount'] / $limit); 
        $data['currentPage'] = $pages;

        return view('frontend/includes/header', $data)
            .view('frontend/blog',$data)
            .view('frontend/includes/footer');
    }

    public function addcommnets(){

        die('');
    }


    public function Showblogdetails($slug){

        
        $data['cities'] = $this->citiesModel->Getcity();
        $data['blogsbyslug'] = $this->blogModel->getBlogsbyslug($slug);
        $data['recentBlogs'] = $this->blogModel->getRecentBlogs(3);
        $data['views_count'] =  $this->blogModel->incrementBlogView($slug);
        $data['all_comment'] =  $this->commentModel->getcommentsbyid($data['blogsbyslug']['id']);
        $data['is_blog_liked'] =  $this->likesModel->checkBlogLiked(getuserIpAddress(),$data['blogsbyslug']['id']);

        $data['id']=$data['blogsbyslug']['id'];
        $data['comment_count']=getcommencount($data['blogsbyslug']['id']);
        $data['likes_count']=getBlogsLikescount($data['blogsbyslug']['id']);

        // echo "<pre>";
        // print_r($data['alllikes']);
        // die;
        return view('frontend/includes/header', $data)
            . view('frontend/blogdetails',$data)
            . view('frontend/includes/footer');
        
    }



   

    
}
