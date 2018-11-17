<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class Users extends Model

{
    use Notifiable;
    protected  $fillable = ['name', 'email', 'password', 'provider', 'provider_id'];

    protected  $hidden = ['password', 'remember_token'];
}
