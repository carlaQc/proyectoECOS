<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'carla',
            'password' => Hash::make('123456'),
            'email' => 'carla@gmail.com',
            'role_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'carlo',
            'email' => 'carlo@gmail.com',
            'password' => Hash::make('123456'),
            'role_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Carna Q',
            'email' => 'carlaq@gmail.com',
            'password' => Hash::make('123456'),
            'role_id' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'carlac',
            'email' => 'carlac@gmail.com',
            'password' => Hash::make('123456'),
            'role_id' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
