<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvaluationCriteria;

class ClassRecordController extends Controller
{
    
    public function index() {

        $evaluations = EvaluationCriteria::all();

        return view('class-record', [
            'evaluations' => $evaluations,
        ]);
    }

    
}


