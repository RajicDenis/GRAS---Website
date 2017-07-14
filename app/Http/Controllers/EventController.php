<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Event;
use App\Gallery;

class EventController extends Controller
{
	public function allEvents(Request $request) {

		if($request->srch == null) {
			$events = Event::orderBy('created_at', 'desc')->paginate(4);
		} else {
			$search = $request->srch;

		    $events = Event::where('title', 'LIKE', '%' . $search . '%')->orWhere('desc', 'LIKE', '%' . $search . '%')->orderBy('created_at', 'desc')->paginate(4);
		}

    	return view('pages.allnews')->with('events', $events);

    }

    public function allComps(Request $request) {

		if($request->srch == null) {
			$comps = Event::where('type', 'comp')->orderBy('created_at', 'desc')->paginate(4);
		} else {
			$search = $request->srch;

		    $comps = Event::where([
					    ['type', '=', 'comp'],
					    ['title', 'LIKE', '%' . $search . '%'],
					])->orWhere([
					    ['type', '=', 'comp'],
					    ['desc', 'LIKE', '%' . $search . '%'],
					])->orderBy('created_at', 'desc')->paginate(4);
		}

    	return view('pages.allcomps')->with('comps', $comps);

    }

	public function showEvent($id) {

		$comments = Comment::where('event_id', $id)->orderBy('created_at', 'desc')->get();
		$comNumber = Comment::where('event_id', $id)->count();
		$gallery = Gallery::where('event_id', $id)->get();

		$event = Event::find($id);

		return view('pages.showEvent')
			->with('comments', $comments)
			->with('comNumber', $comNumber)
			->with('gallery', $gallery)
			->with('event', $event);
	}

    
}
