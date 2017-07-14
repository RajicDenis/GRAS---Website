<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use Carbon\Carbon;

class Utilities extends Model
{
    public static function hasChildren($id) {

    	$allComments = Comment::where('id', '!=', $id)->get();
    	$comment = Comment::find($id);
    	$count = 0;

    	foreach($allComments as $com) {
    		if($comment->id == $com->parent_id) {
    			$count += 1;
    		}
    	}
    	
    	if($count == 0) {
    		return false;
    	} else {
    		return true;
    	}
    }

    public static function getCommentCount($id) {

        $comNumber = Comment::where('event_id', $id)->count();

        return $comNumber;

    }

    public static function checkBell() {

        $event = Event::where('type', 'comp')->orderBy('created_at', 'desc')->first();

        $time = $event->created_at->diffInDays();

        if($time < 1) {
            return true;
        } else {
            return false;
        }

    }

}
