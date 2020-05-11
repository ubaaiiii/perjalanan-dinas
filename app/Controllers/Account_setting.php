<?php namespace App\Controllers;

class Account_setting extends BaseController
{
	public function index()   // cek session
	{
    $data = array(
				'lokasi' => 'Account Setting',
				'content' => 'account_setting',
		);
		return view('home',$data);
	}

}
