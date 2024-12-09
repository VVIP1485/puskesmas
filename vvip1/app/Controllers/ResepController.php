<?php

namespace App\Controllers;

use App\Models\ResepModel;

class ResepController extends BaseController
{
    protected $resepModel;

    public function __construct()
    {
        $this->resepModel = new ResepModel();
    }

    // Menampilkan semua data resep
    public function index()
    {
        $data = [
            'title' => 'Daftar Resep',
            'resep' => $this->resepModel->findAll(),
        ];
        return view('resep/index', $data);
    }

    // Menampilkan form untuk tambah data resep
    public function create()
    {
        $data = [
            'title' => 'Tambah Resep',
            'validation' => \Config\Services::validation(),
        ];
        return view('resep/create', $data);
    }

    public function store()
    {
        // Validasi input
        if (!$this->validate([
            'id_pasien' => 'required|integer',
            'id_dokter' => 'required|integer',
            'tanggal_resep' => 'required|valid_date',
        ])) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $this->resepModel->save([
            'id_pasien' => $this->request->getPost('id_pasien'),
            'id_dokter' => $this->request->getPost('id_dokter'),
            'tanggal_resep' => $this->request->getPost('tanggal_resep'),
        ]);

        return redirect()->to('/resep')->with('success', 'Data resep berhasil ditambahkan.');
    }

    // Menampilkan form edit data resep
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Resep',
            'resep' => $this->resepModel->find($id),
            'validation' => \Config\Services::validation(),
        ];

        if (!$data['resep']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data resep dengan ID $id tidak ditemukan.");
        }

        return view('resep/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'id_pasien' => 'required|integer',
            'id_dokter' => 'required|integer',
            'tanggal_resep' => 'required|valid_date',
        ])) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $this->resepModel->update($id, [
            'id_pasien' => $this->request->getPost('id_pasien'),
            'id_dokter' => $this->request->getPost('id_dokter'),
            'tanggal_resep' => $this->request->getPost('tanggal_resep'),
        ]);

        return redirect()->to('/resep')->with('success', 'Data resep berhasil diperbarui.');
    }

    // Menghapus data resep
    public function delete($id)
    {
        $this->resepModel->delete($id);

        return redirect()->to('/resep')->with('success', 'Data resep berhasil dihapus.');
    }
}
