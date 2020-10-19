<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static updateOrCreate(array $array)
 */
class Permission extends Model
{
    protected $guarded = ['id'];

    public function module(){
        return $this->belongsTo(Module::class);
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }
}
