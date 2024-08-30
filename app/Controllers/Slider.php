<?php 

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\SliderModel;

class Slider extends CommonController{

    public function showSliderDetailes()
    {//starting of the function
        
        $model = model(SliderModel::class);
        $data['sliderList'] = $model->getSliderDetailes();

        $this->CheckFileExists('Views/pages/', 'backoffice-slider');     //Check whether the file exists or not 

        return view('templates/backoffice-header')
               .view('pages/backoffice-slider', $data)
               .view('templates/backoffice-footer');

    }//End of the function


    public function showSliderForm()
    {
        helper('form');

        return view('templates/backoffice-header')
               .view('pages/backoffice-slider-form')
               .view('templates/backoffice-footer');
    }

    public function editSlider(?string $slug = null){

        $model = model(SliderModel::class);
        $data['edit_data'] = $model->getSliderDetailes($slug);

        $this->CheckFileExists('Views/pages/', 'backoffice-edit-slider-form');     //Check whether the file exists or not 
        
        return view('templates/backoffice-header')
               .view('pages/backoffice-edit-slider-form', $data)
               .view('templates/backoffice-footer');
    }


    public function updateSlider(?string $slug = null){
        $model = model(SliderModel::class);
        $data = ['Slider_Title' => $this->request->getPost('title')];

        //Update the record 
        $model->update($slug,$data);
        return redirect()->to('/backoffice-slider');
    }








    public function createSlider(){
        helper('form');
        $data = $this->request->getPost(['title']);

        //checks whether the submitted data passed the validation rules 

        if(! $this->validateData($data, ['title' => 'required|max_length[255]|min_length[3]'])){
            //The validation fales then return the form 
            return $this->new();
        }

        //Gets the validate data 
        $post = $this->validator->getValidated();

        $model = model(SliderModel::class);

        $model->save([
            'Slider_Title' => $post['title'],
            'Created_At' => date('Y-m-d H:i:s'),
            'Updated_At' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/backoffice-slider'); 
    }

    public function deleteSlider(?string $slug = null){
        $model = model(SliderModel::class);
        $model->where('Slider_Id', $slug)->delete();

        return redirect()->to('/backoffice-slider'); 
    }
    
    

}
?>