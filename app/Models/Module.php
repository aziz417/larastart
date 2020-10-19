<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static updateOrCreate(string[] $array)
 */
class Module extends Model
{
    protected $guarded = ['id'];

    public function permissions(){
        return $this->hasMany(Permission::class);
    }
}
