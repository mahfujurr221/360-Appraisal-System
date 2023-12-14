<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = [];
    //join with department table
    public function department()
    {
        return $this->belongsTo(Department::class, 'dept_id', 'id');
    }
    //join with designation table
    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }
    //join with user table
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    use HasFactory;
}
