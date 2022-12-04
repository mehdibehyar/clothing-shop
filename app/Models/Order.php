<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=['status','response_info','price','tracking_code'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot(['color','size','quantity']);
    }


    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function informations()
    {
        return $this->hasMany(Information::class);
    }
}
