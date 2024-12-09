<?php

namespace App\Controllers;

use App\Models\ObatModel;

class ObatController extends BaseController
{
    protected $obatModel;

    public function __construct()
    {
        $this->obatModel = new ObatModel();
    }

    public function index()
    {
        $data['obat'] = $this->obatModel->findAll();
        return view('obat/index', $data);
    }

    // Method untuk menampilkan form tambah obat
    public function create()
    {
        return view('obat/create');
    }

    public function store()
    {
        $this->obatModel->save([
            'nama_obat' => $this->request->getPost('nama_obat'),
            'harga' => $this->request->getPost('harga'),
        ]);

        return redirect()->to('/obat')->with('success', 'Obat berhasil ditambahkan.');
    }

    // Method untuk menampilkan form edit obat
    public function edit($id)
    {
        $data['obat'] = $this->obatModel->find($id);

        if (!$data['obat']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data obat dengan ID $id tidak ditemukan.");
        }

        return view('obat/edit', $data);
    }

    public function update($id)
    {
        $this->obatModel->update($id, [
            'nama_obat' => $this->request->getPost('nama_obat'),
            'harga' => $this->request->getPost('harga'),
        ]);

        return redirect()->to('/obat')->with('success', 'Obat berhasil diperbarui.');
    }

    // Method untuk menghapus data obat
    public function delete($id)
    {
        $this->obatModel->delete($id);

        return redirect()->to('/obat')->with('success', 'Obat berhasil dihapus.');
    }
}
