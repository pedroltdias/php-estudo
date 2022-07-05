<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index()
    {
        $series = DB::select('SELECT nome FROM series;');

        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
        if(DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie])) {
            return "ok";
        } else {
            return "deu erro";
        }
    }
}
