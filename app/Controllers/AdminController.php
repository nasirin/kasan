<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pelanggan;
use App\Models\Transaksi;

class AdminController extends BaseController
{
	protected $transaksi;
	protected $pelanggan;

	public function __construct()
	{
		$this->transaksi = new Transaksi();
		$this->pelanggan = new Pelanggan();
	}

	public function index()
	{
		$data = [
			'no' => 1,
			'transaksi' => $this->transaksi->getData()
		];
		return view('page/service/Service', $data);
	}

	public function tambah()
	{
		$data = [
			'pelanggan' => $this->pelanggan->findAll()
		];
		return view('page/service/ServiceTambah', $data);
	}

	public function simpan()
	{
		$post = $this->request->getVar();

		$this->transaksi->simpan($post);
		session()->setFlashdata('success', 'Data Tersimpan');
		return redirect()->to('/admin');
	}

	public function ubah($id)
	{
		// $transaksi = $this->transaksi->getData($id);
		// dd($transaksi);
		$data = [
			'transaksi' => $this->transaksi->getData($id),
			'pelanggan' => $this->pelanggan->findAll()
		];
		return view('page/service/ServiceUbah', $data);
	}

	public function ganti($id)
	{
		$post = $this->request->getVar();

		$this->transaksi->ubah($post, $id);
		session()->setFlashdata('success', 'Data Terupdate');
		return redirect()->to('/admin');
	}

	public function hapus($id)
	{
		$this->transaksi->delete($id);
		session()->setFlashdata('success', 'Data Terhapus');
		return redirect()->to('/admin');
	}
}
