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
        try {
            \Spatie\Permission\Models\Role::create(['name' => 'admin']);
            \App\Models\User::first()->getAllPermissions();
            \App\Models\User::first()->assignRole('admin');
        } catch (\Exception $e) {
        } catch (\Throwable $e) {
        }
    }
}
