<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['patient_id', 'professional_id'];

    public function patient(){
        return $this->hasOne('App\Patient');
    }

    public function professional(){
        return $this->hasOne('App\Professional');
    }

    use HasFactory;
}
