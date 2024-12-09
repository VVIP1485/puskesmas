<?php

namespace App\Models;

use CodeIgniter\Model;

class PemeriksaanModel extends Model
{
    protected $table = 'pemeriksaan';
    protected $primaryKey = 'id_pemeriksaan';
    protected $allowedFields = ['id_pasien', 'id_dokter', 'hasil_pemeriksaan', 'tanggal_pemeriksaan'];
    protected $useAutoIncrement = true;

    protected $useTimestamps = false;
}
