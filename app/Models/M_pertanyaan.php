<?php namespace App\Models;
use CodeIgniter\Model;

class M_pertanyaan extends Model
{
    protected $table = 'tb_pertanyaan';

    public function getPertanyaan($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_pertanyaan' => $id]);
        }
    }

}
