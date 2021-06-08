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
		if ($post) {
			$laporan = $this->transaksi->laporan($post);
		} else {
			$laporan = $this->transaksi->laporan();
		}

		$data = ['laporan' => $laporan, 'no' => 1];

		return view('page/laporan', $data);
	}
}
