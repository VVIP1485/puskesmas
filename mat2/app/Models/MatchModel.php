<?php namespace App\Models;

use CodeIgniter\Model;

class MatchModel extends Model
{
    protected $table = 'matches';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tournament_id', 'team1_id', 'team2_id', 'match_date', 'result', 'created_at'];
}