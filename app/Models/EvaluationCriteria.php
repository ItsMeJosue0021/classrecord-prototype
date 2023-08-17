<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationCriteria extends Model
{
    use HasFactory;

    public function classRecord()
    {
        return $this->belongsTo(ClassRecord::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
