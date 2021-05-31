<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    protected $fillable = ['nome', 'custo'];

    public function attendance_procedure(){
        return $this->belongsToMany('App\AttendanceProcedure');
    }

    use HasFactory;
}
