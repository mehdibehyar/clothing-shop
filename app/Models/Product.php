<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Discount\Entities\Discount;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['title','description','inventory','price'];

    //for connect to categories table
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    //for connect to users table
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //for connect to images table
    public function images()
    {
        return $this->morphOne(Image::class,'imagable');
    }

    //for connect to attributes table
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class)->withPivot('attribute_value_id');
    }

    //for connect to attribute_values table
    public function attribute_values()
    {
        return $this->belongsToMany(Attribute_Value::class);
    }

    //for connect to users table
    public function users()
    {
        return $this->belongsTo(Product::class);
    }

    //for connect to colors table
    public function colors()
    {
        return $this->belongsToMany(Color::class)->withPivot(['number','size_id'])->withTimestamps();
    }


    //for connect to discounts table
    public function discounts()
    {
        return $this->morphToMany(Discount::class,'discountable');
    }


}
