<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function addComment(Request $request) {

    	$comment = new Comment;

    	$comment->name = $request->name;
    	$comment->comment = $request->comment;
    	$comment->parent_id = $request->parent_id;
    	$comment->event_id = $request->event_id;

    	$comment->save();

    	return back();
 
    }
}
