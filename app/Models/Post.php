<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'image',
        'title',
        'slug',
        'content'
    ];
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when($filters['search'] ?? false,
         fn ($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
    );
    $query->when(
        $filters['category'] ?? false,
        fn ($query, $category) =>
        $query->whereHas('category', fn ($query) => $query->where('slug', $category))
    );

    }

    protected static function boot()
{
    parent::boot();

    static::saving(function ($post) {
        // Buat slug otomatis sebelum data disimpan jika belum ada slug
        if (!$post->slug) {
            // Ambil 10 kata pertama dari konten
            $words = collect(explode(' ', strip_tags($post->title)))
                ->take(10)
                ->join(' ');

            // Hasilkan slug dari 10 kata pertama
            $post->slug = \Illuminate\Support\Str::slug($words);
        }
    });
}

}
