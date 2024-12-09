<?php

namespace App\Models;

use CodeIgniter\Model;

class ScoreModel extends Model
{
    protected $table      = 'scores';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['match_id', 'team_id', 'points'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';

    // Validation Rules
    protected $validationRules = [
        'match_id' => 'required|integer',
        'team_id'  => 'required|integer',
        'points'   => 'required|integer',
    ];
}
