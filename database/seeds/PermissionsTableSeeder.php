<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin\Role::create([
            'name' => 'admin',
            'label_en' => 'Administrator',
            'label_ru' => 'Администратор',
        ]);

        factory(\App\Models\Admin\Role::class, 5)->create();
        factory(\App\Models\Admin\Permission::class, 10)->create();

        \App\Models\User::first()->getAllPermissions();
        \App\Models\User::first()->assignRole('admin');
    }
}
