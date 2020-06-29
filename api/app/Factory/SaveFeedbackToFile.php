<?php


namespace App\Factory;


use Illuminate\Http\Request;

class SaveFeedbackToFile implements SaveFeedbackFactory
{

    public static function createFeedbackRecord(Request $request)
    {
        // std function because of lumen not contains
        // Facades\Storage by default
        $append = file_get_contents('../feedbacks.txt') . PHP_EOL;
        $row = "{$request->input('name')} | {$request->input('phone')} | {$request->input('comment')}";

        file_put_contents('../feedbacks.txt', $append . $row);
        return true;
    }
}
