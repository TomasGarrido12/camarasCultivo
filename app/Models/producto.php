<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    public function cultivo(){
        return $this->belongsTo("App\Models\cultivo");
    }


}
