<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BlogModel;

class BlogController extends BaseController
{


    public function AddBlog()
        {
            echo view('admin/layout/header');
            echo view('admin/pages/add-blog');
            echo view('admin/layout/footer');

        }
        public function addblogdata()
        {
               helper(['form', 'url']);
        $BlogModel = new BlogModel();

        $validated = $this->validate([
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file,4096]',
            ],
        ]);
 
        $msg = 'Please select a valid file';
  
        if ($validated) {
            $avatar = $this->request->getFile('file');
            $avatar->move(WRITEPATH . 'uploads');
       
            
            $data = [
            'blog_title' => $this->request->getVar('blog_title'),
            'blog_description'  => $this->request->getVar('blog_description'),
            'blog_category'  => $this->request->getVar('blog_category'),
            'file'  => $this->request->getVar('file'),
            ];
        

        print_r($data);die();
        $BlogModel->insert($data);
        return $this->response->redirect(base_url('/admin/blog-list'));


        }}
    public function BlogList()
        {
            $BlogModel = new BlogModel();
            $data['blogs'] = $BlogModel->orderBy('blog_id', 'ASC')->findAll(); 

            echo view('admin/layout/header');
            echo view('admin/pages/blog-list', $data);
            echo view('admin/layout/footer');
        }
        
    
    public function CategoryBlog()
        {
            echo view('admin/layout/header');
            echo view('admin/pages/blog-category');
            echo view('admin/layout/footer');
        }
}
