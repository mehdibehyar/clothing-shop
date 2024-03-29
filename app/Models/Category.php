<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Discount\Entities\Discount;

class Category extends Model
{
    use HasFactory;

    protected $fillable=['name_category','parent_id','image'];
    //connect to products table
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    //connect to images table
    public function images()
    {
        return $this->morphMany(Image::class, 'imagable');
    }

    //child category
    public function child()
    {
        return $this->hasMany(Category::class,'parent_id','id');
    }

    //for connect to discounts table
    public function discounts()
    {
        return $this->morphToMany(Discount::class,'discountable');
    }

}
