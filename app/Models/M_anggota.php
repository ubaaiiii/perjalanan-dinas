<?php namespace App\Models;
use CodeIgniter\Model;

class M_anggota extends Model
{
    protected $table = 'tb_anggota';
    protected $primaryKey = 'id_anggota';

    public function getAnggota($id = null)
    {
        if($id === null){
            return $this->findAll();
        }else{
            return $this->find($id);
        }
    }

}
