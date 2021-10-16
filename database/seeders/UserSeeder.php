<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            [
                'name' => '千葉陶也',
                'email' => 'test@email.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'yoshidakenji',
                'email' => 'jitianxianer018@gmail.com',
                'password' => bcrypt('1345Kenn')
            ]
        ]);
        // $users = User::factory()->count(20)->create();
    }
}
