<?php

namespace App\Models;

use CodeIgniter\Model;

class Antrian extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'antrians';
	protected $primaryKey           = 'noAntrian';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['noAntrian', 'idPel', 'status'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
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

	public function last()
	{
		return $this->db->table($this->table)
			->orderBy($this->primaryKey, 'desc')
			->get()->getRowArray();
	}

	public function simpan($no, $id)
	{
		$data = [
			'noAntrian' => $no,
			'idPel' => $id,
			'status' => 1
		];

		$this->insert($data);
	}
}
