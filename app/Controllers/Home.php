<?php 

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;


class Home extends CommonController{
    
    

    public function showHome()
    {//starting of the function 

        $this->CheckFileExists('Views/pages/', 'index');     //Check whether the file exists or not 

        return view('templates/header')
               .view('pages/index')
               .view('templates/footer');

    }//End of the function 
}
?>