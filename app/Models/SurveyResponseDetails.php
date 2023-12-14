<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyResponseDetails extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function surveyResponse()
    {
        return $this->belongsTo(SurveyResponse::class);
    }

    public function surveyQuestion()
    {
        return $this->belongsTo(SurveyQuestion::class);
    }
}
