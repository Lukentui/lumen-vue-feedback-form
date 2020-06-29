<?php

namespace App\Factory;

use Illuminate\Http\Request;

interface SaveFeedbackFactory
{
    public static function createFeedbackRecord(Request $request);
}
