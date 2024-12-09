<?php

namespace App\Models;

use CodeIgniter\Model;

class TournamentModel extends Model
{
    protected $table = 'tournaments';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $allowedFields = ['name', 'game_id', 'start_date', 'end_date'];
}