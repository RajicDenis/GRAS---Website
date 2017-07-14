<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class HomepageController extends Controller
{
    public function index() {

    	$events = Event::orderBy('created_at', 'desc')->take(3)->get();

    	$comp1 = Event::where('type', 'comp')->orderBy('created_at', 'desc')->take(1)->first();
    	$comp2 = Event::where('type', 'comp')->orderBy('created_at', 'desc')->skip(1)->take(1)->first();
    	$comp3 = Event::where('type', 'comp')->orderBy('created_at', 'desc')->skip(2)->take(1)->first();
    	$comp4 = Event::where('type', 'comp')->orderBy('created_at', 'desc')->skip(3)->take(1)->first();

    	return view('pages.homepage')
    		->with('events', $events)
    		->with('comp1', $comp1)
    		->with('comp2', $comp2)
    		->with('comp3', $comp3)
    		->with('comp4', $comp4);

    }
}
