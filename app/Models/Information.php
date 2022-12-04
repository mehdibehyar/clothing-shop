<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{

    use HasFactory;
    protected $fillable=['firstname','lastname','phone','state','city','address','postal_code','description'];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }


}
