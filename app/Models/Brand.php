<?php

namespace App\Models;

use App\Models\BrandIcon;
use App\Models\BrandImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description'];

    public function getroutekeyname(): string
    {
        return 'slug';
    }

    /**
     * Get the icon associated with the Brand
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function icon(): HasOne
    {
        return $this->hasOne(BrandIcon::class);
    }

    /**
     * Get all of the images for the Brand
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(BrandImage::class);
    }

    /**
     * Get all of the products for the Brand
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
