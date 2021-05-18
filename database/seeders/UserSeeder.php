<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'admin@projet.dev',
            'username' => 'admin',
            'firstname' => 'Albert',
            'lastname' => 'Vieyra',
            'password' => bcrypt('admin'),
            'created_at' => now()
        ]);
        
        User::factory()->count(100)->create();
    }
}
