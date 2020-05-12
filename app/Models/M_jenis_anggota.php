<?php namespace App\Models;
use CodeIgniter\Model;

class M_jenis_anggota extends Model
{
    protected $table = 'tb_jenis_anggota';
    protected $primaryKey = 'id_jenis_anggota';

    public function getJenisAnggota($id = null)
    {
        if($id === null){
            return $this->findAll();
        }else{
            return $this->find($id);
        }
    }

}
