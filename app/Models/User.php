<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory ,Notifiable;

    protected $fillable = ['name','email', 'image', 'password', 'designation', 'is_active','licence_type','dob','phone','address'];
    

    public function certificates()
    {
        return $this->hasMany(Certificate::class, 'user_id');
    }
}
