<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'profesor';
    protected $primaryKey = 'codprofesor';
    protected $fillable = ['codprofesor', 'nomprofesor', 'catprofesor', 'imagen'];
    public $timestamps = 'true';
}
