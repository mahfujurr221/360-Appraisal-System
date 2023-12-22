<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyDetail extends Model
{
    use HasFactory;

    public function surveySetups()
    {
        return $this->hasMany(SurveySetup::class, 'survey_detail_id', 'id');
    }
}
