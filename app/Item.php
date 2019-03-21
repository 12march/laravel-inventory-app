<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name', 'category_id', 'price', 'cost_price', 'quantity',
    ];

    /**
     * Relationships
     */
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

}
