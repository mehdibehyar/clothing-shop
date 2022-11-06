<?php

namespace Modules\Discount\Entities;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = ['percent','code','expiration_time'];

    protected static function newFactory()
    {
        return \Modules\Discount\Database\factories\DiscountFactory::new();
    }

    //for connect to users table
    public function users()
    {
        return $this->morphedByMany(User::class,'discountable');
    }

    //for connect to products table
    public function products()
    {
        return $this->morphedByMany(Product::class,'discountable');
    }

    //for connect to categories table
    public function categories()
    {
        return $this->morphedByMany(Category::class,'discountable');
    }
}
