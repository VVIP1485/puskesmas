<?php namespace App\Controllers;

use App\Models\TeamModel;

class TeamController extends BaseController
{
    public function index()
    {
        $model = new TeamModel();
        $data['teams'] = $model->findAll();
        return view('teams/index', $data);
    }

    public function show($id)
    {
        $model = new TeamModel();
        $data['team'] = $model->find($id);
        return view('teams/show', $data);
    }

    public function create()
    {
        return view('teams/create');
    }

    public function store()
    {
        $model = new TeamModel();
        $data = $this->request->getPost();
        $model->save($data);
        return redirect()->to('/teams');
    }

    public function edit($id)
    {
        $model = new TeamModel();
        $data['team'] = $model->find($id);
        return view('teams/edit', $data);
    }

    public function update($id)
    {
        $model = new TeamModel();
        $data = $this->request->getPost();
        $model->update($id, $data);
        return redirect()->to('/teams');
    }

    public function delete($id)
    {
        $model = new TeamModel();
        $model->delete($id);
        return redirect()->to('/teams');
    }
}