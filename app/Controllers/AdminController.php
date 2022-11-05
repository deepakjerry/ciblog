<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function adminIndex()
        {
            echo view('admin/layout/header');
            echo view('admin/index');
            echo view('admin/layout/footer');
        }
        public function BlogList()
        {
            echo view('admin/layout/header');
           echo view('admin/pages/blog-list');
            echo view('admin/layout/footer');
        }
}
