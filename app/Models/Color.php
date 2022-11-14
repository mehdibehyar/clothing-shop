<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use const http\Client\Curl\PROXY_HTTP;

class Color extends Model
{
    use HasFactory;
    protected $fillable=['color','label'];


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
