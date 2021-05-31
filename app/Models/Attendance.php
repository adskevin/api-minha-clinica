<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['nome', 'telefone'];

    public function patient(){
        return $this->hasOne('App\Patient');
    }

    use HasFactory;
}
