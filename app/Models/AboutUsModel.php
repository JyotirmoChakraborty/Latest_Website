<?php 
namespace App\Models;
use CodeIgniter\Model;

class AboutUsModel extends Model{
    protected $table = 'articles';
    protected $primaryKey = 'Article_Id';
    protected $allowedFields = ['Article_Title', 'Article_Body', 'Created_At', 'Updated_At'];

    public function getSliderDetailes($slug = false){
        if($slug === false){
            return $this->findAll();
        }

        return $this->where(['Article_Id' => $slug])->first();
    }
}


?>