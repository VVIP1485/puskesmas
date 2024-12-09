<?php

namespace App\Controllers;

use App\Models\TeamModel;
use App\Models\TournamentModel;
use App\Models\MatchModel;
use App\Models\PlayerModel;
use App\Models\VenueModel;
use App\Models\ScoreModel;

class DashboardController extends BaseController
{
    protected $teamModel;
    protected $tournamentModel;
    protected $matchModel;
    protected $playerModel;
    protected $venueModel;
    protected $scoreModel;

    public function __construct()
    {
        // Inisialisasi model dalam konstruktor
        $this->teamModel = new TeamModel();
        $this->tournamentModel = new TournamentModel();
        $this->matchModel = new MatchModel();
        $this->playerModel = new PlayerModel();
        $this->venueModel = new VenueModel();
        $this->scoreModel = new ScoreModel();
    }

    public function index()
    {
        try {
            // Ambil data statistik dari model
            $data = [
                'total_teams' => $this->teamModel->countAll(),
                'total_tournaments' => $this->tournamentModel->countAll(),
                'total_matches' => $this->matchModel->countAll(),
                'total_players' => $this->playerModel->countAll(),
                'total_venues' => $this->venueModel->countAll(),
                'total_scores' => $this->scoreModel->countAll(),
            ];

            // Kembalikan view dengan data
            return view('dashboard/index', $data);
        } catch (\Exception $e) {
            // Tangani error (opsional: logging, pesan ke view, dll.)
            return view('errors/html/error_general', [
                'message' => 'Terjadi kesalahan saat memuat dashboard.',
                'error' => $e->getMessage(),
            ]);
        }
    }
}
