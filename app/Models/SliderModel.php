<?php 

namespace App\Models;
use CodeIgniter\Model;

class SliderModel extends Model{
    protected $table = 'slider';
    protected $primaryKey = 'Slider_Id';
    protected $allowedFields = ['Slider_Title', 'Created_At', 'Updated_At'];

    public function getSliderDetailes($slug = false){
        if($slug === false){
            return $this->findAll();
        }

        return $this->where(['Slider_Id' => $slug])->first();
    }
}

?>