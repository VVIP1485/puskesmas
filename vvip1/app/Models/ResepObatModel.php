<?php

namespace App\Models;

use CodeIgniter\Model;

class ResepObatModel extends Model
{
    protected $table = 'resepobat';
    protected $primaryKey = 'id_resep_obat';
    protected $allowedFields = ['id_resep', 'id_obat', 'jumlah'];
    protected $useAutoIncrement = true;
}
