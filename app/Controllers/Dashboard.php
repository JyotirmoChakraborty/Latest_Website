<?php 

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;


class Dashboard extends CommonController{
    
    

    public function showDashboard()
    {//starting of the function 

        $this->CheckFileExists('Views/pages/', 'dashboard');     //Check whether the file exists or not 

        return view('templates/backoffice-header')
               .view('pages/dashboard')
               .view('templates/backoffice-footer');

    }//End of the function 
}
?>