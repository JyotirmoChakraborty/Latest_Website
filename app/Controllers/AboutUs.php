<?php 

namespace App\Controllers;

use App\Models\AboutUsModel;
use CodeIgniter\Exceptions\PageNotFoundException;



class AboutUs extends CommonController{

    public function showAboutUs()
    {//starting of the function 

        $this->CheckFileExists('Views/pages/', 'about-us');     //Check whether the file exists or not 

        return view('templates/header')
               .view('pages/about-us')
               .view('templates/footer');

    }//End of the function


    public function showbackofficeAboutUs(){
        helper('form');
        $this->CheckFileExists('Views/pages/', 'backoffice-about-us');     //Check whether the file exists or not
        return view('templates/backoffice-header')
               .view('pages/backoffice-about-us')
               .view('templates/backoffice-footer');
    }

    public function createNewArticle(){
        helper('form');
        $this->CheckFileExists('Views/pages/', 'backoffice-create-about-us');     //Check whether the file exists or not
        return view('templates/backoffice-header')
               .view('pages/backoffice-create-about-us')
               .view('templates/backoffice-footer');

    }

    public function createArticle(){ //starting of the function 
        helper('form');
        $data = $this->request->getPost(['title, body']);

        //Checks whether the data is right or not 
        if(! $this->validateData($data, ['title' => 'required|max_length[255]|min_length[3]', 'body' => 'required|max_length[5000]|min_length[10]'])){
            return redirect()->to('/backoffice-about-us');
        }

        //get the validated data 
        $post = $this->validator->getValidated();
        $model = model(AboutUsModel::class);
        $model->save([
            'Article_Title'=> $post['title'], 
            'Article_Body'=> $post['body'],
            'Created_At' => date('Y-m-d H:i:s'),
            'Updated_At' => date('Y-m-d H:i:s') 
        ]);

        return redirect()->to('/backoffice-about-us');

    }//End of the function createArticle

    public function editArticle(){
        helper('form');

        $this->CheckFileExists('Views/pages/', 'backoffice-about-us');

        return view('templates/backoffice-header')
               .view('pages/backoffice-edit-about-us')
               .view('templates/backoffice-footer');
    }
    

}
?>