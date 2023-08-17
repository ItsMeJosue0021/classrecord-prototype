<?php

namespace App\Models;

use App\Models\EvaluationCriteria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_subject_id',
        'faculty_id',
        'school_year_id'
    ];

    public function evaluationCriterias()
    {
        return $this->hasMany(EvaluationCriteria::class);
    }
}
