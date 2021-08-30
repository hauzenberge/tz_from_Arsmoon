<?php

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
         App\User::create([
            'name' => 'Admin', 
            'phone' => '+380682092340',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
