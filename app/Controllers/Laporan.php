<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Transaksi;

class Laporan extends BaseController
{
	protected $transaksi;

	public function __construct()
	{
		$this->transaksi = new Transaksi();
	}

	public function index()
	{
		$post = $this->request->getVar();
		$laporan = $this->transaksi->laporan($post);
		
		$data = ['laporan' => $laporan, 'no' => 1];

		return view('page/laporan', $data);
	}

	public function all()
	{
		$laporan = $this->transaksi->laporan();

		$data = ['laporan' => $laporan, 'no' => 1];

		return view('page/laporan', $data);
	}
}
