<?php namespace App\Models;
use CodeIgniter\Model;

class M_anggota extends Model
{
    protected $table = 'tb_anggota';
    protected $primaryKey = 'id_anggota';

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
        return json_encode($this->db->table($this->table)->update($data,['id_anggota'=>$id]));
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
