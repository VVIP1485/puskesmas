<?php

namespace App\Controllers;

use App\Models\PemeriksaanModel;

class PemeriksaanController extends BaseController
{
    protected $pemeriksaanModel;

    public function __construct()
    {
        $this->pemeriksaanModel = new PemeriksaanModel();
    }

    
    public function index()
    {
        $data['pemeriksaan'] = $this->pemeriksaanModel->findAll();
        return view('pemeriksaan/index', $data);
    }

    // Menampilkan form untuk tambah data pemeriksaan
    public function create()
    {
        return view('pemeriksaan/create');
    }

    public function store()
    {
        $this->pemeriksaanModel->save([
            'id_pasien' => $this->request->getPost('id_pasien'),
            'id_dokter' => $this->request->getPost('id_dokter'),
            'hasil_pemeriksaan' => $this->request->getPost('hasil_pemeriksaan'),
            'tanggal_pemeriksaan' => $this->request->getPost('tanggal_pemeriksaan'),
        ]);

        return redirect()->to('/pemeriksaan')->with('success', 'Data pemeriksaan berhasil ditambahkan.');
    }

    // Menampilkan form edit data pemeriksaan
    public function edit($id)
    {
        $data['pemeriksaan'] = $this->pemeriksaanModel->find($id);

        if (!$data['pemeriksaan']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data pemeriksaan dengan ID $id tidak ditemukan.");
        }
        return view('pemeriksaan/edit', $data);
    }
    public function update($id)
    {
        $this->pemeriksaanModel->update($id, [
            'id_pasien' => $this->request->getPost('id_pasien'),
            'id_dokter' => $this->request->getPost('id_dokter'),
            'hasil_pemeriksaan' => $this->request->getPost('hasil_pemeriksaan'),
            'tanggal_pemeriksaan' => $this->request->getPost('tanggal_pemeriksaan'),
        ]);
        return redirect()->to('/pemeriksaan')->with('success', 'Data pemeriksaan berhasil diperbarui.');
    }

    // Menghapus data pemeriksaan
    public function delete($id)
    {
        $this->pemeriksaanModel->delete($id);

        return redirect()->to('/pemeriksaan')->with('success', 'Data pemeriksaan berhasil dihapus.');
    }
}
