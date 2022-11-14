<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Active_code extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $fillable=['code','expiration_time','username'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeGenerateCode($query,$username)
    {
        if ($code=$this->getAliveCodeForUser($username)){
            $code=$code->code;
        }else{
            do{
                $code=mt_rand(100000,999999);
            }while($this->CheckCodeIsUnique($username,$code));

            $this->create([
                'code'=>$code,
                'expiration_time'=>now()->addMinutes(10),
                'username'=>$username
            ]);

        }


        return $code;
    }

    private function CheckCodeIsUnique($username, int $code)
    {
        return !! $this->whereUsername($username)->whereCode($code)->first();
    }

    private function getAliveCodeForUser($username)
    {
        return $this->whereUsername($username)->where('expiration_time','>',now())->first();
    }


}
