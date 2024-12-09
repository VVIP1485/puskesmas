<?php

namespace App\Controllers;

use App\Models\ScoreModel;
use App\Models\MatchModel;
use App\Models\TeamModel;

class ScoreController extends BaseController
{
    public function index()
    {
        $scoreModel = new ScoreModel();
        $data['scores'] = $scoreModel
            ->select('scores.*, matches.match_date, teams.name as team_name')
            ->join('matches', 'scores.match_id = matches.id', 'left')
            ->join('teams', 'scores.team_id = teams.id', 'left')
            ->findAll();

        return view('scores/index', $data);
    }

    public function create()
    {
        $matchModel = new MatchModel();
        $teamModel = new TeamModel();

        $data['matches'] = $matchModel->findAll();
        $data['teams'] = $teamModel->findAll();

        return view('scores/create', $data);
    }

    public function store()
    {
        $scoreModel = new ScoreModel();
        
        $data = $this->request->getPost();

        if ($scoreModel->insert($data)) {
            return redirect()->to('/scores')->with('success', 'Score created successfully.');
        }

        return redirect()->back()->with('error', 'Failed to create score.')->withInput();
    }

    public function edit($id)
    {
        $scoreModel = new ScoreModel();
        $matchModel = new MatchModel();
        $teamModel = new TeamModel();

        $data['score'] = $scoreModel->find($id);
        $data['matches'] = $matchModel->findAll();
        $data['teams'] = $teamModel->findAll();

        return view('scores/edit', $data);
    }

    public function update($id)
    {
        $scoreModel = new ScoreModel();
        $data = $this->request->getPost();

        if ($scoreModel->update($id, $data)) {
            return redirect()->to('/scores')->with('success', 'Score updated successfully.');
        }

        return redirect()->back()->with('error', 'Failed to update score.')->withInput();
    }

    public function delete($id)
    {
        $scoreModel = new ScoreModel();

        if ($scoreModel->delete($id)) {
            return redirect()->to('/scores')->with('success', 'Score deleted successfully.');
        }

        return redirect()->back()->with('error', 'Failed to delete score.');
    }
}
