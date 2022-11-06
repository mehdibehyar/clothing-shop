<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    //for connect to attribute_values table
    public function values()
    {
        return $this->hasMany(Attribute_Value::class);
    }

    //for connect to products table
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
