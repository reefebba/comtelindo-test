<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
	protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    # Relationship(s)
    public function sasarans()
    {
        return $this->hasMany(Sasaran::class);
    }
}
