<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programa';
    protected $primaryKey = 'codprograma';
    protected $fillable = ['facultad', 'codprograma', 'nomprograma'];
    public $timestamps = 'true';
}
