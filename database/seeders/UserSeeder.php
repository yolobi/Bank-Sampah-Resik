<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin Resik',
            'email' => 'admin@resik.com',
            'password' => bcrypt('kangdanareuy')
        ]);

        $admin->assignRole('admin');
    }
}
