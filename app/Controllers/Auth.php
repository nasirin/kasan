<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Teknisi;
use CodeIgniter\Session\Session;

class Auth extends BaseController
{

	protected $teknisi;

	public function __construct()
	{
		$this->teknisi = new Teknisi();
	}

	public function index()
	{
		return view('page/login');
	}

	public function login()
	{
		$post = $this->request->getVar();

		$cek = $this->teknisi->login($post);
		if ($cek) {
			$data = [
				'id' => $cek['idTeknisi'],
				'nama' => $cek['namaTeknisi']
			];

			session()->set($data);
			return redirect()->to('/admin');
		} else {
			session()->setFlashdata('error', 'Username Or Password Wrong');
			return redirect()->to('/auth');
		}
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to('/auth');
	}
}
