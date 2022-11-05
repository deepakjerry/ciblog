<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BlogController extends BaseController
{


     public function blog()
    {
        echo view('frontend/layout/header');
        echo view('frontend/blog');
        echo view('frontend/layout/footer');
    }
   
        
    public function AddBlog()
        {
            echo view('admin/layout/header');
            echo view('admin/pages/add-blog');
            echo view('admin/layout/footer');

    }
}
