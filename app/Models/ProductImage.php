<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImage extends Model
{
    use HasFactory;
    
    protected $table = 'product_images';

    protected $primaryKey = 'id';

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    
}