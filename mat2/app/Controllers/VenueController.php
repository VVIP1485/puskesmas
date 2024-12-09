<?php

namespace App\Controllers;

use App\Models\VenueModel;

class VenueController extends BaseController
{
    public function index()
    {
        $venueModel = new VenueModel();
        $data['venues'] = $venueModel->findAll();
        return view('venues/index', $data);
    }

    public function create()
    {
        return view('venues/create');
    }

    public function store()
    {
        $venueModel = new VenueModel();
        $data = $this->request->getPost();

        if ($venueModel->insert($data)) {
            return redirect()->to('/venues')->with('success', 'Venue created successfully.');
        }

        return redirect()->back()->with('error', 'Failed to create venue.')->withInput();
    }

    public function edit($id)
    {
        $venueModel = new VenueModel();
        $data['venue'] = $venueModel->find($id);

        return view('venues/edit', $data);
    }

    public function update($id)
    {
        $venueModel = new VenueModel();
        $data = $this->request->getPost();

        if ($venueModel->update($id, $data)) {
            return redirect()->to('/venues')->with('success', 'Venue updated successfully.');
        }

        return redirect()->back()->with('error', 'Failed to update venue.')->withInput();
    }

    public function delete($id)
    {
        $venueModel = new VenueModel();

        if ($venueModel->delete($id)) {
            return redirect()->to('/venues')->with('success', 'Venue deleted successfully.');
        }

        return redirect()->back()->with('error', 'Failed to delete venue.');
    }
}
