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
        \Spatie\Permission\Models\Role::create([
            'name' => 'admin',
            'label_en' => 'Administrator',
            'label_ru' => 'Администратор',
        ]);
        \App\Models\User::first()->getAllPermissions();
        \App\Models\User::first()->assignRole('admin');
    }
}
