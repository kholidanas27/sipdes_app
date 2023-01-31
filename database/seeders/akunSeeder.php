<?php

namespace Database\Seeders;

use App\Models\Master\MUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class akunSeeder extends Seeder
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
                'username' => 'admin',
                'name' => 'ini akun Admin',
                'email' => 'admin@example.com',
                'level' => 'admin',
                'password' => bcrypt('123456'),
            ],
            [
                'username' => 'user',
                'name' => 'ini akun User (non admin)',
                'email' => 'user@example.com',
                'level' => 'user',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            MUser::create($value);
        }
    }
}
