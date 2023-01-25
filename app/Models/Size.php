<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable=['size'];
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }

    //for connect to statistics table
    public function statistics()
    {
        return $this->hasMany(Statistics::class);
    }
}
