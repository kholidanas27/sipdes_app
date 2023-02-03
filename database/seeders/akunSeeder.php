<?php

namespace Database\Seeders;

use App\Models\Master\MUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class akunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_user')->truncate();
        
        $user = [
            [
                'username' => 'admin',
                'name' => 'ini akun Admin',
                'email' => 'admin@example.com',
                'level' => 'admin',
                'first_name' => 'Aku Admin',
                'last_name' => 'iyaa',
                'bio' => 'test aja sih',
                'phone' => '08398429',
                'password' => bcrypt('123456'),
            ],
            [
                'username' => 'user',
                'name' => 'ini akun User (non admin)',
                'email' => 'user@example.com',
                'level' => 'user',
                'first_name' => 'Aku User',
                'last_name' => 'iyaa',
                'bio' => 'test aja sih',
                'phone' => '08398429',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            MUser::create($value);
        }
    }
}
