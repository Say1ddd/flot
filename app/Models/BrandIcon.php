<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BrandIcon extends Model
{
    use HasFactory;

    protected $fillable = ['icon_path', 'brand_id'];
    
    public $timestamps = false;
    
    /**
     * Get the brand that owns the BrandIcon
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
