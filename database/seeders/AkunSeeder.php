<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'super_admin',
                'name' => 'Super Admin',
                'email' => 'super_admin@example.com',
                'level' => 'super_admin',
                'password' => bcrypt('123456'),
            ],
            [
                'username' => 'admin',
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'level' => 'admin',
                'password' => bcrypt('123456'),
            ],
            [
                'username' => 'operator',
                'name' => 'Operator',
                'email' => 'operator@example.com',
                'level' => 'operator',
                'password' => bcrypt('123456'),
            ],
            [
                'username' => 'pejabat_pj',
                'name' => 'Pejabat pj',
                'email' => 'pejabat_pj@example.com',
                'level' => 'pejabat_pj',
                'password' => bcrypt('123456'),
            ],
            [
                'username' => 'pejabat',
                'name' => 'Pejabat',
                'email' => 'pejabat@example.com',
                'level' => 'pejabat',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
