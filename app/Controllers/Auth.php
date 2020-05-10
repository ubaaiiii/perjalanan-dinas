<?php namespace App\Controllers;

class Auth extends BaseController
{
	public function index()   // cek session
	{
		return view('welcome_message');
	}

	public function login()  // cek login
	{
		$data = array(
				'lokasi' => 'Login',
				'content' => 'logins/auth-login',
		);
		return view('logins/layout',$data);
	}

	public function logout()  // logout
	{
		return view('logins/layout',$data);
	}

	public function register()  // cek login
	{
		$data = array(
				'lokasi' => 'Daftar Akun',
				'content' => 'logins/auth-register',
		);
		return view('logins/layout',$data);
	}

	public function forgot()  // cek login
	{
		$data = array(
				'lokasi' => 'Lupa Password',
				'content' => 'logins/auth-reset-password',
		);
		return view('logins/layout',$data);
	}
}
