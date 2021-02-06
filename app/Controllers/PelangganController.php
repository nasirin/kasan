<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pelanggan;

class PelangganController extends BaseController
{
	protected $pelanggan;

	public function __construct()
	{
		$this->pelanggan = new Pelanggan();
	}

	public function index()
	{
		$data = [
			'no' => 1,
			'pelanggan' => $this->pelanggan->findAll()
		];

		return view('page/pelanggan/pelanggan', $data);
	}

	public function tambah()
	{
		return view('page/pelanggan/pelangganTambah');
	}

	public function simpan()
	{
		$post = $this->request->getVar();

		$this->pelanggan->simpan($post);
		session()->setFlashdata('success', 'Data Tersimpan');
		return redirect()->to('/pelanggan');
	}

	public function ubah($id)
	{
		$data = [
			'pelanggan' => $this->pelanggan->find($id)
		];
		return view('page/pelanggan/pelangganUbah', $data);
	}

	public function ganti($id)
	{
		$post = $this->request->getVar();

		$this->pelanggan->ubah($post, $id);
		session()->setFlashdata('success', 'Data Terupdate');
		return redirect()->to('/pelanggan');
	}
}
