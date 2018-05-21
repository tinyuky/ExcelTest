<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'grade_id'
    ];

    public function grade()
    {
        return $this->belongsTo('App\Grades');
    }
}
