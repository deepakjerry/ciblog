<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class FrontendController extends BaseController
{
    public function index()
    {
        
      echo view('frontend/layout/header');
      echo view('frontend/index'); 
      echo view('frontend/layout/footer');
        
    }
        public function blog()
    {
        echo view('frontend/layout/header');
        echo view('frontend/blog');
        echo view('frontend/layout/footer');
    }
   
     
   
}
