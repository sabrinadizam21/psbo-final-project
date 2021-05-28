<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

//class Dokter extends Model
//{}
    class Dokter extends Authenticatable
    {
        use Notifiable;
    
        protected $guard = 'dokter';
    
        protected $fillable = [
            'name', 'email', 'password',
        ];
    
        protected $hidden = [
            'password', 'remember_token',
        ];
    }
