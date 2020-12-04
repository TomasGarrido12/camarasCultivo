<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cultivo extends Model
{
    use HasFactory;

   public function ordenDeTrabajo(){
        return $this->hasOne("App\Models\ordenDeTrabajo", "cultivo_id");
    }

    public function producto(){
        return $this->hasMany("App\Models\producto","cultivo_id");
    }
}
