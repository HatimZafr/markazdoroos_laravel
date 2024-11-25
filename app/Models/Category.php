<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    protected static function boot()
{
    parent::boot();

    static::saving(function ($category) {
        // Buat slug otomatis sebelum data disimpan
        if (!$category->slug) {
            $category->slug = \Illuminate\Support\Str::slug($category->name);
        }
    });
}

}
