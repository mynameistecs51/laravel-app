<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Role;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $userAdmin = User::create([
            'name'=> 'chaiwat',
            'email' => 'chaiwat@local.com',
            'password' => bcrypt('1qaz2wsx'),
            'role_id' => '1'
        ],[
            'name' => 'homsang',
            'email' => 'homsang@local.com',
            'password' => bcrypt('1qaz2wsx'),
            'role_id' => '3'
        ]);

        $adminRole = Role::create(['name' => "Admin" ]);
        $staffRole = Role::create(['name' => "Staff" ]);
        $studentRole = Role::create(['name' => "Student" ]);
    }
}
