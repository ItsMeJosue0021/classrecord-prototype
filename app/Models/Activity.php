<?php

namespace App\Models;

use App\Models\Score;
use App\Models\EvaluationCriteria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'max_score',
        'evaluation_criteria_id',
        'class_record_id',
        'subject_id',
    ];

    public function evaluationCriteria()
    {
        return $this->belongsTo(EvaluationCriteria::class);
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}
