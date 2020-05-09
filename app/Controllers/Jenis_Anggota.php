<?php namespace App\Controllers;

class Jenis_Anggota extends BaseController
{
	public function index()
	{
		$data = array(
				'judul' => 'Home',
		);
		return view('home',$data);
	}

	//--------------------------------------------------------------------

}
