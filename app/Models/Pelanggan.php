<?php

namespace App\Models;

use CodeIgniter\Model;

class Pelanggan extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'pelanggans';
	protected $primaryKey           = 'idPel';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['namaPel', 'notelpPel', 'alamatPel'];

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

	public function simpan($post)
	{
		$data = [
			'namaPel' => $post['nama'],
			'notelpPel' => $post['telepon'],
			'alamatPel' => $post['alamat']
		];

		$this->insert($data);
	}

	public function ubah($post, $id)
	{
		$data = [
			'namaPel' => $post['nama'],
			'notelpPel' => $post['telepon'],
			'alamatPel' => $post['alamat']
		];

		$this->update([$this->primaryKey => $id], $data);
	}
}
