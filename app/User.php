<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
   use Notifiable;


    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
        protected $hidden = [
        'password', 'remember_token',
    ];


    // 其他的 Eloquent 屬性...

    /**
     * 取得該使用者的所有任務。
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
