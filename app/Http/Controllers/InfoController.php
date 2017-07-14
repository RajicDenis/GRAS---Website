<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Session;

class InfoController extends Controller
{
    public function about() {

    	return view('pages.about');

    }

    public function contact() {

    	return view('pages.contact');

    }

    public function leaveMessage(request $request) {

        $message = new Message;

        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;

        $message->save();

        Session::flash('message', 'Poruka uspješno poslana!');
        Session::flash('alert_type', 'alert-success');

        return redirect()->back();

    }

    public function documents() {

    	return view('pages.documents');

    }

    public function stats() {

    	return view('pages.stats');

    }
}
