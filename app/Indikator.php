<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];
    
}
