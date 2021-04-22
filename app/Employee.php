<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
     protected $fillable = [
        'name', 'email', 'phone', 'address', 'exprience', 'photo', 'salary', 'join_date', 'vacation'
    ];
}
