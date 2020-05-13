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

    public function simpan($data)
    {
        if($this->db->table($this->table)->insert($data)){
          return "true";
        } else {
          return "false";
        }
    }

    public function ubah($data, $id)
    {
        return json_encode($this->db->table($this->table)->update($data,['id_jenis_kegiatan'=>$id]));
    }

    public function hapus($id)
    {
        if($this->delete($id)) {
          return "true";
        } else {
          return "false";
        }
    }

}
