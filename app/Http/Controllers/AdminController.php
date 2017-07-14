<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Competition;
use App\Gallery;
use App\Message;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function addEvent() {

        $events = Event::orderBy('created_at', 'desc')->get();

    	return view('admin.addEvent')->with('events', $events); 

    }

    public function addComp() {

        $competitions = Competition::orderBy('created_at', 'desc')->get();

    	return view('admin.addComp')->with('competitions', $competitions);

    }

    public function editEvent($id) {

        $event = Event::find($id);

        return view('admin.editEvent')->with('event', $event); 

    }

    public function editComp($id) {

        $comp = Competition::find($id);

        return view('admin.editComp')->with('comp', $comp); 

    }

    public function storeEvent(Request $request) {

    	$this->validate($request, [
                'title' => 'required|max:200',
                'summary' => 'max:2000',
                'desc' => 'required|max:15000'
            ]);

    	$event = new Event;

    	if($request->pic != null) {
            $file = $request->pic;
            $destination = public_path().'/images/news';           
            $fileName = $file->getClientOriginalName();
            $file->move($destination, $fileName);
            $event->pic = $fileName;
        }

    	$event->title = $request->title;
    	$event->summary = $request->summary;
    	$event->type = $request->type;
    	$event->desc = $request->desc;
    	$event->created_at = Carbon::now();

    	$event->save();

        if($request->gallery != null) {
            $images = Input::file('gallery');
            $event = Event::orderBy('id', 'desc')->first();
            foreach($images as $image) {
                $imageDestination = public_path().'/images/news/gallery'; 
                $imageName = $image->getClientOriginalName();
                $image->move($imageDestination, $imageName);
                $gallery = new Gallery;
                $gallery->image = $imageName;
                $gallery->event_id = $event->id;

                $gallery->save();

            }   

        }

    	Session::flash('event', 'Novost uspješno dodana!');
        Session::flash('alert_type', 'alert-success');

    	return redirect()->back();

    }

    public function storeComp(Request $request) {

    	$this->validate($request, [
                'jurisdiction' => 'max:250',
                'name' => 'max:250',
                'goal' => 'max:1000'
            ]);

    	$comp = new Competition;

    	if($request->status == 'open') {
    		$status = 'OTVOREN';
    	} else {
    		$status = 'U NAJAVI';
    	}

    	$comp->jurisdiction = $request->jurisdiction;
    	$comp->name = $request->name;
    	$comp->applicants = $request->applicants;
    	$comp->start_date = $request->start_date;
    	$comp->end_date = $request->end_date;
    	$comp->status = $status;
    	$comp->goal = $request->goal;
    	$comp->value = $request->value;
    	$comp->more = $request->more;

    	$comp->save();

    	Session::flash('comp', 'Novost uspješno dodana!');
        Session::flash('alert_type', 'alert-success');

    	return redirect()->back();

    }

    public function updateEvent($id, Request $request) {

        $this->validate($request, [
                'title' => 'required|max:200',
                'summary' => 'max:2000',
                'desc' => 'required|max:15000'
            ]);

        $event = Event::find($id);

        if($request->pic != null) {
            $file = $request->pic;
            $destination = public_path().'/images/news';           
            $fileName = $file->getClientOriginalName();
            $file->move($destination, $fileName);
            $event->pic = $fileName;
        }

        $event->title = $request->title;
        $event->summary = $request->summary;
        $event->type = $request->type;
        $event->desc = $request->desc;
        $event->updated_at = Carbon::now();

        $event->save();

        if($request->gallery != null) {
            $images = Input::file('gallery');
            $event = Event::find($id);
            if(Gallery::where('event_id', $id)->get() != null) {
                Gallery::where('event_id', $id)->delete();
            }

            foreach($images as $image) {
                $imageDestination = public_path().'/images/news/gallery'; 
                $imageName = $image->getClientOriginalName();
                $image->move($imageDestination, $imageName);
                $gallery = new Gallery;
                $gallery->image = $imageName;
                $gallery->event_id = $event->id;

                $gallery->save();
            }   
        }

        Session::flash('event', 'Novost uspješno uređena!');
        Session::flash('alert_type', 'alert-warning');

        return $this->addEvent();

    }

    public function updateComp($id, Request $request) {

        $this->validate($request, [
                'jurisdiction' => 'max:250',
                'name' => 'max:250',
                'goal' => 'max:1000'
            ]);

        $comp = Competition::find($id);

        if($request->status == 'open') {
            $status = 'OTVOREN';
        } else {
            $status = 'U NAJAVI';
        }

        $comp->jurisdiction = $request->jurisdiction;
        $comp->name = $request->name;
        $comp->applicants = $request->applicants;
        $comp->start_date = $request->start_date;
        $comp->end_date = $request->end_date;
        $comp->status = $status;
        $comp->goal = $request->goal;
        $comp->value = $request->value;
        $comp->more = $request->more;

        $comp->save();

        Session::flash('comp', 'Novost uspješno uređena!');
        Session::flash('alert_type', 'alert-warning');

        return $this->addComp();

    }

    public function removeEvent($id) {

        Event::destroy($id);

        Session::flash('removed', 'Novost izbrisana!');
        Session::flash('alert_type', 'alert-danger');

        return back();

    }

    public function removeComp($id) {

        Competition::destroy($id);

        Session::flash('removed', 'Natječaj izbrisan!');
        Session::flash('alert_type', 'alert-danger');

        return back();

    }

    public function showMessages() {

        $messages = Message::orderBy('created_at', 'desc')->get();

        return view('admin.messages')->with('messages', $messages);

    }

    public function deleteMessage($id) {

        $messages = Message::destroy($id);

        Session::flash('removed', 'Poruka izbrisana!');
        Session::flash('alert_type', 'alert-danger');

        return redirect()->back();

    }
}
