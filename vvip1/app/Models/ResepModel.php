<?php

namespace App\Models;

use CodeIgniter\Model;

class ResepModel extends Model
{
    protected $table = 'resep';
    protected $primaryKey = 'id_resep';
    protected $allowedFields = ['id_pasien', 'id_dokter', 'tanggal_resep'];
    protected $useAutoIncrement = true;

    protected $useTimestamps = false;
}
