<?php

namespace App\Controllers;

use App\Models\DokterModel;
use CodeIgniter\Controller;

class DokterController extends Controller
{
    public function index()
    {
        $model = new DokterModel();
        $data['dokter'] = $model->findAll();
        return view('dokter/index', $data);
    }

    public function create()
    {
        return view('dokter/create');
    }

    public function store()
    {
        $model = new DokterModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'spesialisasi' => $this->request->getPost('spesialisasi'),
            'nomor_telepon' => $this->request->getPost('nomor_telepon'),
        ];
        $model->save($data);
        return redirect()->to('/dokter');
    }

    public function edit($id)
    {
        $model = new DokterModel();
        $data['dokter'] = $model->find($id);
        return view('dokter/edit', $data);
    }

    public function update($id)
    {
        $model = new DokterModel();
        $data = [
            'id_dokter' => $id,
            'nama' => $this->request->getPost('nama'),
            'spesialisasi' => $this->request->getPost('spesialisasi'),
            'nomor_telepon' => $this->request->getPost('nomor_telepon'),
        ];
        $model->save($data);
        return redirect()->to('/dokter');
    }

    public function delete($id)
    {
        $model = new DokterModel();
        $model->delete($id);
        return redirect()->to('/dokter');
    }
}
