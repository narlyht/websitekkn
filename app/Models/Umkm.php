<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'owner',
        'rw',
        'rt',
        'category',
        'price',
        'phone',
        'hours',
        'address',
        'image',
        'images',
        'description',
        'products',
    ];

    protected $casts = [
        'products' => 'array',
        'images' => 'array',
    ];

    /**
     * Accessor to get array of all images (up to 5) with fallback.
     */
    public function getImagesListAttribute(): array
    {
        if (is_array($this->images) && count($this->images) > 0) {
            return $this->images;
        }
        if ($this->image) {
            return [$this->image];
        }
        return ['https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80'];
    }
}
