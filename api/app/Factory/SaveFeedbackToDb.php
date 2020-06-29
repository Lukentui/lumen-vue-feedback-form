<?php


namespace App\Factory;


use App\Feedback;
use Illuminate\Http\Request;

class SaveFeedbackToDb implements SaveFeedbackFactory
{
    public static function createFeedbackRecord(Request $request)
    {
        $feedback = new Feedback;

        $feedback->name = $request->input('name');
        $feedback->phone = $request->input('phone');
        $feedback->comment = $request->input('comment');

        return $feedback->save();
    }
}
