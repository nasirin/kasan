<?php

namespace App\Models;

use CodeIgniter\Model;

class Transaksi extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'transaksis';
	protected $primaryKey           = 'idTransaksi';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['idPel', 'namaPrinter', 'type', 'kondisi', 'keterangan', 'harga', 'statusTransaksi', 'idTeknisi'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'createdAt';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	public function getData($id = null)
	{
		if ($id) {
			return $this->db->table($this->table)
				->join('pelanggans', 'pelanggans.idPel = transaksis.idPel', 'left')
				->where($this->primaryKey, $id)
				->get()->getRowArray();
		} else {
			return $this->db->table($this->table)
				->join('pelanggans', 'pelanggans.idPel = transaksis.idPel', 'left')
				->get()->getResultArray();
		}
	}

	public function simpan($post)
	{
		// idPel', 'namaPrinter', 'type', 'kondisi', 'keterangan', 'harga', 'statusTransaksi', 'idTeknisi'
		$data = [
			'idPel' => $post['pelanggan'],
			'namaPrinter' => $post['nama'],
			'type' => $post['type'],
			'kondisi' => $post['kondisi'],
			'keterangan' => $post['keterangan'],
			'harga' => $post['harga'],
			'statusTransaksi' => $post['status'],
			'idTeknisi' => session('id'),
		];

		$this->insert($data);
	}
	public function ubah($post, $id)
	{
		// idPel', 'namaPrinter', 'type', 'kondisi', 'keterangan', 'harga', 'statusTransaksi', 'idTeknisi'
		$data = [
			'idPel' => $post['pelanggan'],
			'namaPrinter' => $post['nama'],
			'type' => $post['type'],
			'kondisi' => $post['kondisi'],
			'keterangan' => $post['keterangan'],
			'harga' => $post['harga'],
			'statusTransaksi' => $post['status'],
			'idTeknisi' => session('id'),
		];

		$this->update([$this->primaryKey => $id], $data);
	}
}
