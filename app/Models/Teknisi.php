<?php

namespace App\Models;

use CodeIgniter\Model;

class Teknisi extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'teknisis';
	protected $primaryKey           = 'idTeknisi';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['namaTeknisi', 'username', 'password'];

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

	public function login($post)
	{
		return $this->db->table($this->table)
			->where('username', $post['username'])
			->where('password', $post['password'])
			->get()->getRowArray();
	}

	public function simpan($post)
	{
		$data = [
			'namaTeknisi' => $post['nama'],
			'username' => $post['username'],
			'password' => $post['password']
		];

		$this->insert($data);
	}

	public function ubah($post, $id)
	{
		$data = [
			'namaTeknisi' => $post['nama'],
			'username' => $post['username'],
			'password' => $post['password']
		];

		$this->update([$this->primaryKey => $id], $data);
	}
}
