<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    use Notifiable;

    protected $fillable = [
        'name'
    ];
}
