<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Teknisi as ModelsTeknisi;

class Teknisi extends BaseController
{
	protected $teknisi;

	public function __construct()
	{
		$this->teknisi = new ModelsTeknisi();
	}

	public function index()
	{
		$data = [
			'no' => 1,
			'teknisi' => $this->teknisi->findAll()
		];

		return view('page/teknisi/teknisi', $data);
	}

	public function tambah()
	{
		return view('page/teknisi/teknisiTambah');
	}

	public function simpan()
	{
		$post = $this->request->getVar();

		$this->teknisi->simpan($post);
		session()->setFlashdata('success', 'Data Tersimpan');
		return redirect()->to('/teknisi');
	}

	public function ubah($id)
	{
		$data = [
			'teknisi' => $this->teknisi->find($id)
		];
		return view('page/teknisi/teknisiUbah', $data);
	}

	public function ganti($id)
	{
		$post = $this->request->getVar();

		$this->teknisi->ubah($post, $id);
		session()->setFlashdata('success', 'Data Terupdate');
		return redirect()->to('/teknisi');
	}

	public function hapus($id)
	{
		$this->teknisi->delete($id);
		session()->setFlashdata('success', 'Data Terhapus');
		return redirect()->to('/teknisi');
	}
}
