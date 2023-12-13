<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyResponse extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function surveyResponseDetails()
    {
        return $this->hasMany(SurveyResponseDetails::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function surveySetup()
    {
        return $this->belongsTo(SurveySetup::class);
    }
}
