<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable=['user_id1','user_id2','text_message','response'];
    use HasFactory;

    public function user1(){
        return $this->belongsTo(User::class,'user_id1','id');
    }
}
