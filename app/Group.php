<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public $table = 'lecture_groups';
    protected $fillable = ['name', 'part'];
}
