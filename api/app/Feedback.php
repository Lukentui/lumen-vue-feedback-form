<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Feedback extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'comment'
    ];

    private static function callFeedbackCreator($creator, Request $request) {
        return $creator->createFeedbackRecord($request);
    }

    /**
     * Will create new feedback record
     * You should validate request first
     *
     * @param Request $request
     * @return bool Is operation success
     */
    public static function createFeedbackRecord(Request $request) {
        return Feedback::callFeedbackCreator(new Factory\SaveFeedbackToFile, $request);
//        return Feedback::callFeedbackCreator(new Factory\SaveFeedbackToDb, $request);
    }
}
