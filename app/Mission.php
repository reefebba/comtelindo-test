<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
	protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];
    
    # Relationship(s)
    public function tujuans()
    {
        return $this->hasMany(Tujuan::class);
    }
}
