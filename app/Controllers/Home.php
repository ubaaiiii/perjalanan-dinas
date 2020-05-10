<?php namespace App\Controllers;

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

	public function jenis_perjalanan()
	{
		$data = array(
				'lokasi'	=> 'Jenis Perjalanan',
				'content' => 'table/jenis_perjalanan',
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

}
