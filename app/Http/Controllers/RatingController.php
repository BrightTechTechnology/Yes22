<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Rating;

class RatingController extends Controller
{
    public function __construct()
    {
        // only logged in users can rate
        // does this work with ajax?

        if ( ! \Auth::check()){
            abort(404, 'cannot rate');
        }
    }

    public function CreateRating()
    {
        $userId = \Auth::User()->id;
        $score = \Input::get('score');
        $item = \Input::get('item');
        $item_id = \Input::get('item_id');

        // check if user rated the item already
        $rating = Rating::where('user_id', '=', $userId)
            ->where('item', '=', $item)
            ->where('item_id', '=', $item_id)
            ->first();

        if ( ! $rating) {
            // update rating bc ratings need to be unique
        }

        Rating::create([
            'user_id' => $userId,
            'score' => $score,
            'item' => $item,
            'item_id' => $item_id,
        ]);


    }

    public function ShowRating($item, $id)
    {
        // check if have any ratings
        // calculate average of ratings

    }

    public function RemoveRating($item, $id)
    {
        // remove rating of that single user
    }
}