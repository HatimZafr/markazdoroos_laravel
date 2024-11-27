<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryPaket extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function paket()
    {
        return $this->hasMany(Paket::class, 'id_kategori');
    }

    protected static function boot()
{
    parent::boot();

    static::saving(function ($categorypakets) {
        // Buat slug otomatis sebelum data disimpan
        if (!$categorypakets->slug) {
            $categorypakets->slug = \Illuminate\Support\Str::slug($categorypakets->name);
        }
    });
}

}