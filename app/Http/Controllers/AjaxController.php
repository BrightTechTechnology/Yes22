<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Rating;

class AjaxController extends Controller
{

    public function rating()
    {
        $userId = \Input::get('user');
        $score = \Input::get('score');
        $item = \Input::get('item');
        $item_id = \Input::get('item_id');

        // check if user rated the item already
        $rating = Rating::where('user_id', '=', $userId)
            ->where('item', '=', $item)
            ->where('item_id', '=', $item_id)
            ->first();

        if ($rating) {
            $rating->score = $score;
            $rating->save();
        } else {
            Rating::create([
                'user_id' => $userId,
                'score' => $score,
                'item' => $item,
                'item_id' => $item_id,
            ]);
        }
    }
}