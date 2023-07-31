<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    const CATEGORY_STATUS_IS_ACTIVE = 1;

    const CATEGORY_STATUS_IS_INACTIVE = 0;

    protected $table = 'categories';

    protected $primaryKey = 'id';

    protected $fillable = [
        'site_id',
        'name',
        'img_link',
        'position',
        'slug',
        'status'
    ];

    /**
     * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sites()
    {
        return $this->belongsTo(Site::class, 'site_id', 'id');
    }
}