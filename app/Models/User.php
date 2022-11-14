<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Discount\Entities\Discount;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    //for get super user
    public function IsSuperUser()
    {
        return $this->SuperUser;
    }

    //for get staff user
    public function IsStaffUser()
    {
        return $this->StaffUser;
    }



    //for connect to permission table
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    //for connect to roles table
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role)
    {
        return !!$role->intersect($this->roles)->all();
    }

    public function hasPermission($permission)
    {
        return $this->permissions->contains('name',$permission->name) || $this->hasRole($permission->roles);
    }

    //for connect to products table
    public function products()
    {
        return $this->hasMany(Product::class);
    }


    //for connect to discounts table
    public function discounts()
    {
        return $this->morphToMany(Discount::class,'discountable');
    }


    //for connect to descriptions table
    public function discriptions()
    {
        return $this->hasMany(Description::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'phone',
        'password',
        'SuperUser',
        'StaffUser'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function setPasswordAttribute($value)
    {
        $this->attributes['password']= bcrypt($value);
    }

    //for connect to posts table
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    //for connect to advertises table
    public function advertises()
    {
        return $this->hasMany(Advertise::class);
    }

    //for connect to active_codes table
    public function active_code()
    {
        return $this->hasMany(Active_code::class);
    }
}
