<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Users Permission's
        Permission::create([
            'name'          => 'Ver Usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver Detalle de Usuarios',
            'slug'          => 'users.show',
            'description'   => 'Ver detalle de cada usuario del sistema',
        ]);
        Permission::create([
            'name'          => 'Crear Usuarios',
            'slug'          => 'users.create',
            'description'   => 'Crear usuarios en el sistema',
        ]);
        Permission::create([
            'name'          => 'Editar Usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Editar cualquier usuario del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar Usuarios',
            'slug'          => 'users.destroy',
            'description'   => 'Eliminar cualquier usuario del sistema',
        ]);

        // Roles Permission's
        Permission::create([
            'name'          => 'Ver Roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles  del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver Detalle de Roles',
            'slug'          => 'roles.show',
            'description'   => 'Ver detalle de cada rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Crear Roles',
            'slug'          => 'roles.create',
            'description'   => 'Crear rol en el sistema',
        ]);
        Permission::create([
            'name'          => 'Editar Roles',
            'slug'          => 'roles.edit',
            'description'   => 'Editar cualquier rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar Roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Eliminar cualquier rol del sistema',
        ]);

        // Products Permission's
        Permission::create([
            'name'          => 'Ver Productos',
            'slug'          => 'products.index',
            'description'   => 'Lista y navega todos los Productos  del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver Detalle de Productos',
            'slug'          => 'products.show',
            'description'   => 'Ver detalle de cada rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Crear Productos',
            'slug'          => 'products.create',
            'description'   => 'Crear rol en el sistema',
        ]);
        Permission::create([
            'name'          => 'Editar Productos',
            'slug'          => 'products.edit',
            'description'   => 'Editar cualquier rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar Productos',
            'slug'          => 'products.destroy',
            'description'   => 'Eliminar cualquier rol del sistema',
        ]);


        // Assessment Permission's
        Permission::create([
            'name'          => 'Ver valoraciones',
            'slug'          => 'assessment.index',
            'description'   => 'Lista y navega las valoraciones del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de valoraciones',
            'slug'          => 'assessment.show',
            'description'   => 'Ver detalle de cada valoracion registrada',
        ]);
        Permission::create([
            'name'          => 'Crear valoraciones',
            'slug'          => 'assessment.create',
            'description'   => 'Registar valoracion',
        ]);
        Permission::create([
            'name'          => 'Editar valoracion',
            'slug'          => 'assessment.edit',
            'description'   => 'Editar cualquier valoracion del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar valoracion',
            'slug'          => 'assessment.destroy',
            'description'   => 'Eliminar valoracion del sistema',
        ]);



    }
}
