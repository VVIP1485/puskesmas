<?php namespace App\Controllers;

use App\Models\TournamentModel;

class TournamentController extends BaseController
{
    public function index()
    {
        // Ambil data tournament dan tampilkan
        $model = new TournamentModel();
        $data['tournaments'] = $model->findAll();

        return view('tournaments/index', $data);
    }

    public function show($id)
    {
        $model = new TournamentModel();
        $data['tournament'] = $model->find($id);
        return view('tournaments/show', $data);
    }

    public function create()
    {
        return view('tournaments/create');
    }

    public function store()
    {
        $model = new TournamentModel();
        $data = $this->request->getPost();
        $model->save($data);
        return redirect()->to('/tournaments');
    }

    public function edit($id)
    {
        $model = new TournamentModel();
        $data['tournament'] = $model->find($id);
        return view('tournaments/edit', $data);
    }

    public function update($id)
    {
        $model = new TournamentModel();
        $data = $this->request->getPost();
        $model->update($id, $data);
        return redirect()->to('/tournaments');
    }

    public function delete($id)
    {
        $model = new TournamentModel();
        $model->delete($id);
        return redirect()->to('/tournaments');
    }
}