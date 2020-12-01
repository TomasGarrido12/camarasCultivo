<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cultivo extends Model
{
    use HasFactory;

    public function ordenDeTrabajo(){
        return $this->hasOne("App\Models\ordenDeTrabajo");
    }

    public function producto(){
        return $this->hasMany("App\Models\producto");
    }
}
