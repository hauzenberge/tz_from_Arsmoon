<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emploeer extends Model
{
    protected $table = 'employeer';
    protected $fillable = ['id', 'fname', 'sname', 'pname'];
}
