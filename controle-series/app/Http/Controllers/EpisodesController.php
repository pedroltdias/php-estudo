<?php

namespace App\Http\Controllers;

class EpisodesController
{
    public function index(Season $season)
    {
        return view('episodes.index', ['episodes' => $season->episodes]);
    }
}
