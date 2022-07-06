<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    public $table = 'lecture_halls';
    protected $fillable = ['name', 'place'];
}
