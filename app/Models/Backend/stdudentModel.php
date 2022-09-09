<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stdudentModel extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'roll',
        'registration_no',
        'department',
        'semester',
        'father_name',
        'mother_name',
        'gender',
        'status'
    ];
}
