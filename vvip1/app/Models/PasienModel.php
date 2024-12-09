<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table = 'pasien';
    protected $primaryKey = 'id_pasien';
    protected $allowedFields = ['nama', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'nomor_telepon'];
    protected $useTimestamps = false;
}
