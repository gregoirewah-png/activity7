<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }

    public function roboticsKit()
    {
        return $this->hasOne(RoboticsKit::class);
    }

}
