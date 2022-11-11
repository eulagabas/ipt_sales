<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function merchandises(){
        return $this->hasMany('App\Models\Merchandise');
    }
}
