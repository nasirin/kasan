<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Antrian as ModelsAntrian;

class Antrian extends BaseController
{
	protected $antrian;

	public function __construct()
	{
		$this->antrian = new ModelsAntrian();
	}

	public function index()
	{

		$data = $this->antrian->last();
		if ($data) {
			if ($data['createdAt'] == date('ymd')) {
				$noantri = 1;
				$no = $noantri + 1;
			} else {
				$no = $data['noAntrian'] + 1;
			}
			if (session('id')) {
				$id = session('id');
			} else {
				$id = null;
			}
		} else {
			$no = 1;
			if (session('id')) {
				$id = session('id');
			} else {
				$id = null;
			}
		}

		$this->antrian->simpan($no, $id);
		$noUrut['no'] = $this->antrian->last();
		return view('page/noantrian', $noUrut);
	}
}
