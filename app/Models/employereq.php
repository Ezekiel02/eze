<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employereq extends Model
{
    use HasFactory;

    protected $table =['employerequirements'];

    protected $fillable = ['CompanayName','BusinessPermit','MayorsPermit','Jobvacancies'];
}
