<?php

namespace App\Models;

use App\Models\Score;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}
