<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $table = 'teams';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $allowedFields = ['name', 'region'];

    // Validasi input untuk data tim
    protected $validationRules = [
        'name' => 'required|string|max_length[255]',
        'region' => 'permit_empty|string|max_length[255]'
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'Nama tim harus diisi.',
            'max_length' => 'Nama tim tidak boleh melebihi 255 karakter.'
        ],
        'region' => [
            'max_length' => 'Region tim tidak boleh melebihi 255 karakter.'
        ]
    ];

    // Method untuk mendapatkan semua tim
    public function getAllTeams()
    {
        return $this->findAll();
    }

    // Method untuk mendapatkan satu tim berdasarkan ID
    public function getTeamById($id)
    {
        return $this->find($id);
    }

    // Method untuk menambahkan tim baru
    public function createTeam($data)
    {
        return $this->save($data);
    }

    // Method untuk memperbarui data tim
    public function updateTeam($id, $data)
    {
        return $this->update($id, $data);
    }

    // Method untuk menghapus tim berdasarkan ID
    public function deleteTeam($id)
    {
        return $this->delete($id);
    }
}
