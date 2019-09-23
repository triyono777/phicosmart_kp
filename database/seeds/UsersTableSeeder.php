<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Triyono',
            'email' => 'admin@admin.com',
            'password' => bcrypt('rahasia'),
            'status' => true
        ]);
    }
}
