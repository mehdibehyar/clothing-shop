<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Active_code extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $fillable=['code','expiration_time'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeGenerateCode($query,$user)
    {
        if ($code=$this->getAliveCodeForUser($user)){
            $code=$code->code;
        }else{
            do{
                $code=mt_rand(100000,999999);
            }while($this->CheckCodeIsUnique($user,$code));

            $user->active_code()->create([
                'code'=>$code,
                'expiration_time'=>now()->addMinutes(1)
            ]);

        }


        return $code;
    }

    private function CheckCodeIsUnique($user, int $code)
    {
        return !! $user->active_code()->whereCode($code)->first();
    }

    private function getAliveCodeForUser($user)
    {
        return $user->active_code()->where('expiration_time','>',now())->first();
    }


}
