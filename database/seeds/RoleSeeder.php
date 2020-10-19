<?php

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = Permission::all();
        Role::updateOrCreate([
            'name' => 'admin',
            'slug' => 'admin',
            'deletable' => false
        ])->permissions()->sync($permissions->pluck('id'));
    }
}
