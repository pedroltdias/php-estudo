<?php

namespace App\Http\Controllers;

use App\Models\Season;

class EpisodesController
{
    public function index(Season $season)
    {
        return view('episodes.index', ['episodes' => $season->episodes]);
    }
}
