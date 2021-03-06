<?php namespace App\Controllers;

use App\Models\M_pertanyaan;

class Home extends BaseController
{
	public function index()
	{
		$data = array(
				'lokasi' => 'Home',
				'content' => 'dashboard',
		);
		return view('home',$data);
	}

	public function jenis_anggota()
	{
		$data = array(
				'lokasi'	=> 'Jenis Anggota',
				'content' => 'table/jenis_anggota',
		);
		return view('home',$data);
	}

	public function jenis_kegiatan()
	{
		$data = array(
				'lokasi'	=> 'Jenis Kegiatan',
				'content' => 'table/jenis_kegiatan',
		);
		return view('home',$data);
	}

	public function data_anggota()
	{
		$data = array(
				'lokasi'	=> 'Data Anggota',
				'content' => 'table/data_anggota',
		);
		return view('home',$data);
	}

	public function monitoring()
	{
		$data = array(
				'lokasi'	=> 'Data Kegiatan',
				'content' => 'table/data_kegiatan',
		);
		return view('home',$data);
	}

	public function laporan()
	{
		$data = array(
				'lokasi'	=> 'Data Laporan',
				'content' => 'laporan',
		);
		return view('home',$data);
	}

	public function pertanyaan_keamanan()
	{
		$model = new M_pertanyaan();
		$data = array(
				'dataPertanyaan'	=> $model->getPertanyaan(),
				'lokasi'	=> 'Pertanyaan Keamanan',
				'content' => 'table/pertanyaan',
		);
		return view('home',$data);
	}

}
