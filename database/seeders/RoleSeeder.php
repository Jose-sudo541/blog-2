<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Blogger']);
        Role::create(['name' => 'Lector']);

        Permission::create(['name' => 'admin.home'])->syncRoles(['Admin', 'Blogger']);

        Permission::create(['name' => 'admin.users.index'])->syncRoles(['Admin']);

        //Permisos Categorias
        Permission::create(['name' => 'admin.categoria.index'])->syncRoles(['Admin']);

        //Permisos Etiquetas
        Permission::create(['name' => 'admin.etiqueta.index'])->syncRoles(['Admin']);

        //Permisos Post
        Permission::create(['name' => 'admin.post.index'])->syncRoles(['Admin', 'Blogger']);
        Permission::create(['name' => 'admin.post.create'])->syncRoles(['Admin', 'Blogger']);
    }
}
