<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveySetup extends Model
{
    use HasFactory;

    public function surveyDetails()
    {
        return $this->belongsTo(SurveyDetail::class, 'survey_detail_id');
    }

    public function surveyFor()
    {
        return $this->belongsTo(Employee::class, 'survey_for_id', 'user_id');
    }

    public function questionSet()
    {
        return $this->belongsTo(QuestionSet::class);
    }
}
