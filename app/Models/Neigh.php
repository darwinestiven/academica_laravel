<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Neigh extends Model
{
    protected $table = 'barrio';
    protected $primaryKey = 'codbarrio';
    public $timestamps = 'true';
}
