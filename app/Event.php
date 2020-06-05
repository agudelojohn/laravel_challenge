<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //filalable = variables que se pueden actualizar
    protected $fillable = ['title','description', 'startDate','endDate','status'];
    //
}
