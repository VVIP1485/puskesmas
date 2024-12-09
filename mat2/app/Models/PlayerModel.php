<?php

namespace App\Models;

use CodeIgniter\Model;

class PlayerModel extends Model
{
    protected $table      = 'players';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'team_id', 'role', 'age'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation Rules
    protected $validationRules = [
        'name'     => 'required|min_length[3]|max_length[255]',
        'team_id'  => 'required|integer',
        'role'     => 'required|min_length[3]|max_length[255]',
        'age'      => 'required|integer|min_length[1]',
    ];
}
