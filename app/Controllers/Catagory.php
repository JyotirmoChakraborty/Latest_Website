<?php 

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;


class Catagory extends CommonController{

    public function showCategory()
    {//starting of the function 

        $this->CheckFileExists('Views/pages/', 'catagory');     //Check whether the file exists or not 

        return view('templates/header')
               .view('pages/catagory')
               .view('templates/footer');

    }//End of the function
    
    public function showbackofficeCategory(){
        $this->CheckFileExists('Views/pages/', 'backoffice-catagory');     //Check whether the file exists or not 

        return view('templates/backoffice-header')
               .view('pages/backoffice-catagory')
               .view('templates/backoffice-footer');
        
    }

    public function createNewCatagory(){
        $this->CheckFileExists('Views/pages/', 'backoffice-new-catagory');     //Check whether the file exists or not 

        return view('templates/backoffice-header')
               .view('pages/backoffice-new-catagory')
               .view('templates/backoffice-footer');
    }
    

}
?>