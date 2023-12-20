<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveySetup extends Model
{
    use HasFactory;

    public function surveyFor()
    {
        return $this->belongsTo(Employee::class, 'survey_for_id', 'user_id');
    }
}
