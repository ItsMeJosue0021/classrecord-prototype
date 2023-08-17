<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function store(Request $request) {

        $activity = [
            'name' => $request->name,
            'max_score' => $request->max_score,
            'evaluation_criteria_id' => $request->evaluation_criteria_id,
            'class_record_id' => 1,
        ];

        $activitySaved = Activity::create($activity);

        if ($activitySaved) {
            return redirect()->back()->with('success', 'Activity created successfully!');
        } else {
            return redirect()->back()->with('error', 'Activity creation failed!');
        }

        
    }
}
