<?php namespace App\Models;
use CodeIgniter\Model;

class M_jenis_kegiatan extends Model
{
    protected $table = 'tb_jenis_kegiatan';
    protected $primaryKey = 'id_jenis_kegiatan';

    public function getJenisKegiatan($id = null)
    {
        if($id === null){
            return $this->findAll();
        }else{
            return $this->find($id);
        }
    }

}
