<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = array(
				'judul' => 'Jenis Anggota',
				'content' => 'dashboard',
		);
		return view('home',$data);
	}

	//--------------------------------------------------------------------

}
