<?php

namespace App\Controllers;

use App\Models\PasienModel;
use App\Models\DokterModel;
use App\Models\ResepModel;
use App\Models\PemeriksaanModel;
use App\Models\ResepObatModel;
use App\Models\ObatModel;  // Menambahkan model Obat
use CodeIgniter\Controller;

class DashboardController extends Controller
{
    protected $pasienModel;
    protected $dokterModel;
    protected $resepModel;
    protected $pemeriksaanModel;
    protected $resepObatModel;
    protected $obatModel; // Menambahkan model Obat

    public function __construct()
    {
        // Memastikan bahwa model yang diperlukan telah diinisialisasi
        $this->pasienModel = new PasienModel();
        $this->dokterModel = new DokterModel();
        $this->resepModel = new ResepModel();
        $this->pemeriksaanModel = new PemeriksaanModel();
        $this->resepObatModel = new ResepObatModel();
        $this->obatModel = new ObatModel(); // Inisialisasi model Obat

        // Memastikan bahwa pengguna telah login sebelum akses dashboard
        helper('url');
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');  // Mengarahkan pengguna yang belum login
        }
    }

    // Menampilkan dashboard dengan informasi entitas terkait
    public function index()
    {
        // Mengambil data statistik entitas
        $data = [
            'title' => 'Dashboard',
            'totalPasien' => $this->pasienModel->countAll(),
            'totalDokter' => $this->dokterModel->countAll(),
            'totalResep' => $this->resepModel->countAll(),
            'totalPemeriksaan' => $this->pemeriksaanModel->countAll(),
            'totalResepObat' => $this->resepObatModel->countAll(),
            'totalObat' => $this->obatModel->countAll(), // Menambahkan jumlah obat
            'username' => session()->get('username'), // Menampilkan username yang login
        ];

        // Menampilkan halaman dashboard dengan data yang diambil
        return view('dashboard/index', $data);
    }
}
