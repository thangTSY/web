<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class RolePermission extends Model
{
    use HasFactory, SoftDeletes, Notifiable;
    protected $guarded = [];
    protected $datas = ['deleted_at'];

    public function Permission()
    {
        return $this->hasOne(Permission::class, 'id', 'permission_id');

    }
    public function Role()
    {
        return $this->hasOne(Role::class, 'id', 'role_id');
        
    }
}
