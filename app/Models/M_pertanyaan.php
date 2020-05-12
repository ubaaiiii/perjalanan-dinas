<?php namespace App\Models;
use CodeIgniter\Model;

class M_pertanyaan extends Model
{
    protected $table = 'tb_pertanyaan';
    protected $primaryKey = 'id_pertanyaan';

    public function getPertanyaan($id = null)
    {
        if($id === null){
            return $this->findAll();
        }else{
            return $this->find($id);
        }
    }

}
