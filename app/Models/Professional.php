<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    protected $fillable = ['nome', 'cargo'];

    public function attendance(){
        return $this->belongsTo('App\Attendance');
    }

    use HasFactory;
}
