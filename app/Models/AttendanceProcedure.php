<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceProcedure extends Model
{
    protected $fillable = ['attendance_id', 'procedure_id', 'custo_na_data'];

    use HasFactory;
}
