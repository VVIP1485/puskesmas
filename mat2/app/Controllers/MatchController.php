<?php

namespace App\Controllers;

use App\Models\MatchModel;

class MatchController extends BaseController
{
    public function index()
    {
        // Ambil data match dan tampilkan
        $model = new MatchModel();
        $data['matches'] = $model->findAll();

        return view('matches/index', $data);
    }

    public function show($id)
    {
        $model = new MatchModel();
        $data['match'] = $model->find($id);
        return view('matches/show', $data);
    }

    public function create()
    {
        $tournamentModel = new \App\Models\TournamentModel();
        $data['tournaments'] = $tournamentModel->findAll();

        return view('matches/create', $data);
    }
    public function store()
    {
        $model = new MatchModel();
        $data = $this->request->getPost();
        $model->save($data);
        return redirect()->to('/matches');
    }

    public function edit($id)
    {
        $model = new MatchModel();
        $data['match'] = $model->find($id);
        return view('matches/edit', $data);
    }

    public function update($id)
    {
        $model = new MatchModel();
        $data = $this->request->getPost();
        $model->update($id, $data);
        return redirect()->to('/matches');
    }

    public function delete($id)
    {
        $model = new MatchModel();
        $model->delete($id);
        return redirect()->to('/matches');
    }
}
