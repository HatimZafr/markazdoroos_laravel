<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dars extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'id_doroos',
        'content',
    ];

    public function doroos()
    {
        return $this->belongsTo(Doroos::class, 'id_doroos');
    }

    
}
