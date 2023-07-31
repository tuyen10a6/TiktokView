<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeUnit\FunctionUnit;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Product extends Model
{
    
    use HasFactory;
    
    const PRODUCT_STATUS_IS_ACTIVE = 1;

    const PRODUCT_STATUS_IS_INACTIVE = 0;
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function site(): BelongsTo
    {
        return $this->belongsTo(Site::class);
    }

    public function productImages(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    public function productVideos(): HasMany
    {
        return $this->hasMany(ProductVideo::class);
    }
}
?>