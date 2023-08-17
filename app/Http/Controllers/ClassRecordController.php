<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Activity;
use Illuminate\Http\Request;
use App\Models\EvaluationCriteria;

class ClassRecordController extends Controller
{
    
    public function index() {

        $evaluations = EvaluationCriteria::all();

        $students = Student::all();

        $wr_activities = Activity::where('evaluation_criteria_id', 1)->get();

        return view('class-record', [
            'evaluations' => $evaluations,
            'students' => $students,
            'wr_activities' => $wr_activities,
        ]);
    }

}


