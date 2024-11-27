<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doroos extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'id_paket',
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'id_paket');
    }

    public function dars()
    {
        return $this->hasMany(Dars::class, 'id_doroos');
    }
}
