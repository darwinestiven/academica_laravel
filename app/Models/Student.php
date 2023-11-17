<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'estudiante';
    protected $primaryKey = 'codestudiante';
    protected $fillable = ['ciudad', 'barrio', 'programa', 'codestudiante', 'nomestudiante', 'edaestudiante', 'fechestudiante', 'sexestudiante'];
    public $timestamps = 'true';
}
