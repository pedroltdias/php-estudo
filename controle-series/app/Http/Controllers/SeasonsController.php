<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeasonsController extends Controller
{
    public function index(Series $series)
    {
        $seasons = $series->seasons;

        return view('seasons.index')->with('seasons', $seasons);
    }
}
