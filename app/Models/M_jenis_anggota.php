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

    public function simpan($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return true;
    }

    public function hapus($id)
    {
        if($this->delete($id)) {
          return true;
        } else {
          return false;
        }
    }

}
