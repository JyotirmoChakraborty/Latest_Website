<?php 

namespace App\controllers;


use CodeIgniter\Exceptions\PageNotFoundException;

abstract class CommonController extends BaseController{

    public function CheckFileExists($path, $fileName)
    {
        if(! is_file(APPPATH . $path . $fileName . '.php'))
        {
            return throw new PageNotFoundException($filename);
        }
    }//end of the function 
}

?>