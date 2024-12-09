<?php

namespace App\Models;

use CodeIgniter\Model;

class VenueModel extends Model
{
    protected $table      = 'venues';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'location', 'capacity'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation Rules
    protected $validationRules = [
        'name'      => 'required|min_length[3]|max_length[255]',
        'location'  => 'required|min_length[3]|max_length[255]',
        'capacity'  => 'required|integer',
    ];
}
