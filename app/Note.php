<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'notes';
    public $primaryKey = 'id';
    public $timestamps = true;
}
