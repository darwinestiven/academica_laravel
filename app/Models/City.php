<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'ciudad';
    protected $primaryKey = 'codciudad';
    public $timestamps = 'true';
}
