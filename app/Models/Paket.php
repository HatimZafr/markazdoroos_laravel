<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paket extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'id_kategori',
        'price',
        'description',
    ];

    protected $with = ['doroos', 'category', 'enrollments', 'transactions'];

    public function category()
    {
        return $this->belongsTo(CategoryPaket::class, 'id_kategori');
    }

    public function doroos()
    {
        return $this->hasMany(Doroos::class, 'id_paket');
    }
    

    public function enrollments()
    {
        return $this->hasMany(Enrollments::class, 'id_paket');
    }

    public function transactions()
    {
        return $this->hasMany(Transactions::class, 'id_paket');
    }
}
