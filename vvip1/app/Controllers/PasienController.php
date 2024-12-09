<?php

namespace App\Controllers;

use App\Models\PasienModel;
use CodeIgniter\Controller;

class PasienController extends Controller
{
    public function index()
    {
        $model = new PasienModel();
        $data['pasien'] = $model->findAll();
        return view('pasien/index', $data);
    }

    public function create()
    {
        return view('pasien/create');
    }

    public function store()
    {
        $model = new PasienModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'alamat' => $this->request->getPost('alamat'),
            'nomor_telepon' => $this->request->getPost('nomor_telepon'),
        ];
        $model->save($data);
        return redirect()->to('/pasien');
    }

    public function edit($id)
    {
        $model = new PasienModel();
        $data['pasien'] = $model->find($id);
        return view('pasien/edit', $data);
    }

    public function update($id)
    {
        $model = new PasienModel();
        $data = [
            'id_pasien' => $id,
            'nama' => $this->request->getPost('nama'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'alamat' => $this->request->getPost('alamat'),
            'nomor_telepon' => $this->request->getPost('nomor_telepon'),
        ];
        $model->save($data);
        return redirect()->to('/pasien');
    }

    public function delete($id)
    {
        $model = new PasienModel();
        $model->delete($id);
        return redirect()->to('/pasien');
    }
}
