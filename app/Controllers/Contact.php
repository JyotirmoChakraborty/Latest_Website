<?php 

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;


class Contact extends CommonController{

    public function showContact()
    {//starting of the function 

        $this->CheckFileExists('Views/pages/', 'contact');     //Check whether the file exists or not 

        return view('templates/header')
               .view('pages/contact')
               .view('templates/footer');

    }//End of the function

    public function showbackofficeContact(){
        
        $this->CheckFileExists('Views/pages/', 'backoffice-contact-us');     //Check whether the file exists or not 

        return view('templates/backoffice-header')
               .view('pages/backoffice-contact-us')
               .view('templates/backoffice-footer');

    }
    
    

}
?>