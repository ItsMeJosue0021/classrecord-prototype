<?php

namespace App\Models;

use App\Models\EvaluationCriteria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;

    public function evaluationCriteria()
    {
        return $this->belongsTo(EvaluationCriteria::class);
    }
}
