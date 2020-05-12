<?php namespace App\Models;
use CodeIgniter\Model;

class M_kegiatan extends Model
{
    protected $table = 'tb_kegiatan';
    protected $primaryKey = 'id_kegiatan';

    public function getKegiatan($id = null)
    {
        if($id === null){
            return $this->findAll();
        }else{
            return $this->find($id);
        }
    }

}
