<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competition;

class CompetitionController extends Controller
{
    public function index() {

    	$competitions = Competition::orderBy('start_date', 'desc')->get();

    	return view('pages.allcompetitions')->with('competitions', $competitions);

    }
}
