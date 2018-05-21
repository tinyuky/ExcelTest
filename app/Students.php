<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use Notifiable;

    protected $fillable = [
        'student_id', 'firstname', 'lastname','dob','pob','gender','code1','code2','note','status'
    ];

    public function class()
    {
        return $this->belongsTo('App\Class');
    }
}
