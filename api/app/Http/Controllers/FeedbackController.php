<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Create feedback
     *
     * @param  Request  $request
     * @return string[]
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            // 18 chars in `+7 (000) 000-00-00`,
            // i think regexp is too much
            'phone' => 'required|size:18',
            'comment' => 'required'
        ]);

        return [
            'success' => Feedback::createFeedbackRecord($request),
        ];
    }
}
