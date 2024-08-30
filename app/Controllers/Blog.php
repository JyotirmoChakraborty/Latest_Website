<?php 

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;


class Blog extends CommonController{

    public function showBlog()
    {//starting of the function 

        $this->CheckFileExists('Views/pages/', 'blog');     //Check whether the file exists or not 

        return view('templates/header')
               .view('pages/blog')
               .view('templates/footer');

    }//End of the function

    public function showbackofficeBlog(){
        $this->CheckFileExists('Views/pages/', 'backoffice-blog');     //Check whether the file exists or not 

        return view('templates/backoffice-header')
               .view('pages/backoffice-blog')
               .view('templates/backoffice-footer');
    }

    public function createNewBlog(){
        $this->CheckFileExists('Views/pages/', 'backoffice-new-blog');     //Check whether the file exists or not 

        return view('templates/backoffice-header')
               .view('pages/backoffice-new-blog')
               .view('templates/backoffice-footer');
    }
    
    

}
?>