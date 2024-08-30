<?php 

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;


class Testimonial extends CommonController{

    public function showTestimonial()
    {//starting of the function 

        $this->CheckFileExists('Views/pages/', 'testimonial');     //Check whether the file exists or not 

        return view('templates/header')
               .view('pages/testimonial')
               .view('templates/footer');

    }//End of the function


    public function showbackofficeTestimonial(){
        $this->CheckFileExists('Views/pages/', 'backoffice-testimonial');     //Check whether the file exists or not 

        return view('templates/backoffice-header')
               .view('pages/backoffice-testimonial')
               .view('templates/backoffice-footer');   
    }
    
    public function createNewTestimonial(){
        $this->CheckFileExists('Views/pages/', 'backoffice-new-testimonial');     //Check whether the file exists or not 

        return view('templates/backoffice-header')
               .view('pages/backoffice-new-testimonial')
               .view('templates/backoffice-footer');
    }

}
?>