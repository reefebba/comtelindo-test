<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sasaran extends Model
{
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];
    
    # Relationship(s)
    public function indikators()
    {
        return $this->hasMany(Indikator::class);
    }
}
