<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'role'];
    protected $useTimestamps = true;

    // Fungsi untuk memeriksa apakah username dan password cocok
    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
