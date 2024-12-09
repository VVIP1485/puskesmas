<?php

namespace App\Controllers;

use App\Models\ResepObatModel;

class ResepObatController extends BaseController
{
    protected $resepObatModel;

    public function __construct()
    {
        $this->resepObatModel = new ResepObatModel();
    }

    // Menampilkan semua data resep obat
    public function index()
    {
        $data = [
            'title' => 'Daftar Resep Obat',
            'resepobat' => $this->resepObatModel->findAll(),
        ];

        return view('resepobat/index', $data);
    }

    // Menampilkan form untuk tambah resep obat
    public function create()
    {
        $data = ['title' => 'Tambah Resep Obat'];

        return view('resepobat/create', $data);
    }

    public function store()
    {
        $this->resepObatModel->save([
            'id_resep' => $this->request->getPost('id_resep'),
            'id_obat' => $this->request->getPost('id_obat'),
            'jumlah' => $this->request->getPost('jumlah'),
        ]);

        return redirect()->to('/resepobat')->with('success', 'Resep obat berhasil ditambahkan.');
    }

    // Menampilkan form edit resep obat
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Resep Obat',
            'resepobat' => $this->resepObatModel->find($id),
        ];

        if (!$data['resepobat']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data resep obat dengan ID $id tidak ditemukan.");
        }

        return view('resepobat/edit', $data);
    }

    public function update($id)
    {
        $this->resepObatModel->update($id, [
            'id_resep' => $this->request->getPost('id_resep'),
            'id_obat' => $this->request->getPost('id_obat'),
            'jumlah' => $this->request->getPost('jumlah'),
        ]);

        return redirect()->to('/resepobat')->with('success', 'Resep obat berhasil diperbarui.');
    }

    // Menghapus data resep obat
    public function delete($id)
    {
        $this->resepObatModel->delete($id);

        return redirect()->to('/resepobat')->with('success', 'Resep obat berhasil dihapus.');
    }
}
