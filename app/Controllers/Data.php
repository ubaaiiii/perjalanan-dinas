<?php namespace App\Controllers;

class Data extends BaseController
{
	public function jenis_anggota($tipe = null, $id = null)
	{
    $modelnya = model('App\Models\M_jenis_anggota', false);
    if ($tipe == "save") {
			$data = array(
				'id_jenis_anggota'	=> strtoupper($this->request->getPost('kode-jenis-anggota')),
				'jenis_anggota' 		=> ucwords($this->request->getPost('jenis-anggota')),
			);
			$cekData = $modelnya->getJenisAnggota($data['id_jenis_anggota']);
			if ($cekData) {
				echo "exist";
			} else {
				echo json_encode($modelnya->simpan($data));
			}
    }

		else if ($tipe == "edit") {
			$data = array(
				'id_jenis_anggota'	=> strtoupper($this->request->getPost('kode-jenis-anggota')),
				'jenis_anggota' 		=> ucwords($this->request->getPost('jenis-anggota')),
			);
			echo json_encode($modelnya->ubah($data, $this->request->getPost('kode-awal')));
		}

		else if ($tipe == "delete") {
			echo json_encode($modelnya->hapus($id));
		}

		else {
      $datanya = $modelnya->getJenisAnggota($id);
      echo json_encode($datanya);
    }
	}

	public function jenis_kegiatan($tipe = null, $id = null)
	{
    $modelnya = model('App\Models\M_jenis_kegiatan', false);
		if ($tipe == "save") {
			$data = array(
				'id_jenis_kegiatan'	=> strtoupper($this->request->getPost('kode-jenis-kegiatan')),
				'jenis_kegiatan' 		=> ucwords($this->request->getPost('jenis-kegiatan')),
			);
			$cekData = $modelnya->getJenisKegiatan($data['id_jenis_kegiatan']);
			if ($cekData) {
				echo "exist";
			} else {
				echo json_encode($modelnya->simpan($data));
			}
    }

		else if ($tipe == "edit") {
			$data = array(
				'id_jenis_kegiatan'	=> strtoupper($this->request->getPost('kode-jenis-kegiatan')),
				'jenis_kegiatan' 		=> ucwords($this->request->getPost('jenis-kegiatan')),
			);
			echo json_encode($modelnya->ubah($data, $this->request->getPost('kode-awal')));
		}

		else if ($tipe == "delete") {
			echo json_encode($modelnya->hapus($id));
		}

		else {
      $datanya = $modelnya->getJenisKegiatan($id);
      echo json_encode($datanya);
    }
	}

	public function anggota($tipe = null, $id = null)
	{
    $modelnya = model('App\Models\M_anggota', false);
		if ($tipe == "save") {
			$data = array(
				'id_anggota'	=> strtoupper($this->request->getPost('id-anggota')),
				'anggota' 		=> ucwords($this->request->getPost('jenis-kegiatan')),
			);
			$cekData = $modelnya->getAnggota($data['id_anggota']);
			if ($cekData) {
				echo "exist";
			} else {
				echo json_encode($modelnya->simpan($data));
			}
    }

		else if ($tipe == "edit") {
			$data = array(
				'id_anggota'	=> strtoupper($this->request->getPost('id-anggota')),
				'anggota' 		=> ucwords($this->request->getPost('jenis-kegiatan')),
			);
			echo json_encode($modelnya->ubah($data, $this->request->getPost('kode-awal')));
		}

		else if ($tipe == "delete") {
			echo json_encode($modelnya->hapus($id));
		}

		else {
      $datanya = $modelnya->getAnggota($id);
      echo json_encode($datanya);
    }
	}

	public function monitoring($tipe = null, $id = null)
	{
    $modelnya = model('App\Models\M_kegiatan', false);
    if ($tipe == "") {

    } else {
      $datanya = $modelnya->getKegiatan($id);
      echo json_encode($datanya);
    }
	}

	public function laporan($tipe = null, $id = null)
	{
    $modelnya = model('App\Models\M_laporan', false);
    if ($tipe == "") {

    } else {
      $datanya = $modelnya->getLaporan($id);
      echo json_encode($datanya);
    }
	}

	public function pertanyaan($tipe = null, $id = null)
	{
    $modelnya = model('App\Models\M_pertanyaan', false);
    if ($tipe == "") {

    } else {
      $datanya = $modelnya->getPertanyaan($id);
      echo json_encode($datanya);
    }
	}

}
