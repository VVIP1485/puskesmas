<?php

namespace App\Controllers;

use App\Models\PlayerModel;
use App\Models\TeamModel;

class PlayerController extends BaseController
{
    public function index()
    {
        $playerModel = new PlayerModel();
        $data['players'] = $playerModel
            ->select('players.*, teams.name as team_name')
            ->join('teams', 'players.team_id = teams.id', 'left')
            ->findAll();

        return view('players/index', $data);
    }

    public function create()
    {
        $teamModel = new TeamModel();
        $data['teams'] = $teamModel->findAll();

        return view('players/create', $data);
    }

    public function store()
    {
        $playerModel = new PlayerModel();
        $data = $this->request->getPost();

        if ($playerModel->insert($data)) {
            return redirect()->to('/players')->with('success', 'Player created successfully.');
        }

        return redirect()->back()->with('error', 'Failed to create player.')->withInput();
    }

    public function edit($id)
    {
        $playerModel = new PlayerModel();
        $teamModel = new TeamModel();

        $data['player'] = $playerModel->find($id);
        $data['teams'] = $teamModel->findAll();

        return view('players/edit', $data);
    }

    public function update($id)
    {
        $playerModel = new PlayerModel();
        $data = $this->request->getPost();

        if ($playerModel->update($id, $data)) {
            return redirect()->to('/players')->with('success', 'Player updated successfully.');
        }

        return redirect()->back()->with('error', 'Failed to update player.')->withInput();
    }

    public function delete($id)
    {
        $playerModel = new PlayerModel();

        if ($playerModel->delete($id)) {
            return redirect()->to('/players')->with('success', 'Player deleted successfully.');
        }

        return redirect()->back()->with('error', 'Failed to delete player.');
    }
}
