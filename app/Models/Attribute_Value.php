<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute_Value extends Model
{
    protected $table='attribute_values';
    protected $fillable=['value','label'];
    use HasFactory;
    //for connect to products table
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    //for connect to attributes table
    public function attributes()
    {
        return $this->belongsTo(Attribute::class);
    }
}
