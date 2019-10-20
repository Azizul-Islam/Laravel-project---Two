<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empolyee extends Model
{
    protected $fillable = ['empolyee_name', 'empolyee_id', 'empolyee_designation', 'empolyee_number', 'empolyee_email', 'employee_photo'];
}
