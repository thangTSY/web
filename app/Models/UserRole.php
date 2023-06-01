<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class UserRole extends Model
{
    use HasFactory, SoftDeletes, Notifiable;
    protected $guarded = [];
    protected $datas = ['deleted_at'];



    public function User()
    {
        return $this->hasOne(User::class, 'id', 'user_id');

    }
    public function Role()
    {
        return $this->hasOne(Menus::class, 'id', 'role_id');
        
    }
}
