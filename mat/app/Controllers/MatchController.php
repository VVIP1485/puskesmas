<?php

namespace App\Controllers;

use App\Models\MatchModel;
use App\Models\TournamentModel;
use App\Models\TeamModel;

class MatchController extends BaseController
{
    public function index()
    {
        $matchModel = new MatchModel();
        $data['matches'] = $matchModel
            ->select('matches.*, t1.name as team1_name, t2.name as team2_name, tournaments.name as tournament_name')
            ->join('teams as t1', 'matches.team1_id = t1.id', 'left')
            ->join('teams as t2', 'matches.team2_id = t2.id', 'left')
            ->join('tournaments', 'matches.tournament_id = tournaments.id', 'left')
            ->findAll();

        return view('matches/index', $data);
    }

    public function create()
    {
        $tournamentModel = new TournamentModel();
        $teamModel = new TeamModel();

        $data['tournaments'] = $tournamentModel->findAll();
        $data['teams'] = $teamModel->findAll();

        return view('matches/create', $data);
    }

    public function store()
    {
        $matchModel = new MatchModel();
        $data = $this->request->getPost();

        if ($matchModel->insert($data)) {
            return redirect()->to('/matches')->with('success', 'Match created successfully.');
        }

        return redirect()->back()->with('error', 'Failed to create match.')->withInput();
    }

    public function edit($id)
    {
        $matchModel = new MatchModel();
        $tournamentModel = new TournamentModel();
        $teamModel = new TeamModel();

        $data['match'] = $matchModel->find($id);
        $data['tournaments'] = $tournamentModel->findAll();
        $data['teams'] = $teamModel->findAll();

        return view('matches/edit', $data);
    }

    public function update($id)
    {
        $matchModel = new MatchModel();
        $data = $this->request->getPost();

        if ($matchModel->update($id, $data)) {
            return redirect()->to('/matches')->with('success', 'Match updated successfully.');
        }

        return redirect()->back()->with('error', 'Failed to update match.')->withInput();
    }

    public function delete($id)
    {
        $matchModel = new MatchModel();

        if ($matchModel->delete($id)) {
            return redirect()->to('/matches')->with('success', 'Match deleted successfully.');
        }

        return redirect()->back()->with('error', 'Failed to delete match.');
    }
}
