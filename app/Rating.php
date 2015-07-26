<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['user_id', 'score', 'item', 'item_id'];


    public function getRatingData($item, $itemId)
    {
        $ratingData = [];
        $ratingData['item'] = $item;
        $ratingData['itemId'] = $itemId;

        $ratingData['userId'] = '';
        $ratingData['activated'] = 'false';
        if (\Auth::check()) {
            $ratingData['activated'] = 'true';
            $ratingData['userId'] = \Auth::user()->id;
        }

        // calculate score
        $ratings = Rating::where('item_id', $itemId)
            ->where('item', $item)
            ->get();
        $ratingSum = 0;
        $ratingCount = 0;
        foreach ($ratings as $rating) {
            $ratingSum = $ratingSum + $rating->score;
            $ratingCount = $ratingCount + 1;
        }
        if ($ratingCount > 0) {
            $ratingScore = $ratingSum / $ratingCount;
            $ratingData['scoreInteger'] = round($ratingScore, 0);
            $ratingData['scorePoint'] = number_format(round($ratingScore, 1), 1);
            $ratingData['scoreVotes'] = $ratingCount;
        } else {
            $ratingData['scoreInteger'] = 0;
            $ratingData['scorePoint'] = '0.0';
            $ratingData['scoreVotes'] = '0';
        }

        return $ratingData;
    }

}
