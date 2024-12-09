<?php

namespace App\Models;

use CodeIgniter\Model;

class DokterModel extends Model
{
    protected $table = 'dokter';
    protected $primaryKey = 'id_dokter';
    protected $allowedFields = ['nama', 'spesialisasi', 'nomor_telepon'];
    protected $useTimestamps = false;
}
