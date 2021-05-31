<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['nome', 'telefone'];

    public function attendance(){
        return $this->belongsTo('App\Attendance');
    }

    use HasFactory;
}
