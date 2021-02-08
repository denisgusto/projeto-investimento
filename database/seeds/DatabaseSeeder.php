<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Denis Augusto',
            'cpf' => '111222333444',
            'gender' => 'M',
            'birth' => '1995-09-01',
            'phone' => '32424243',
            'notes' => 'Anotação de seeds.',
            'email' => 'denis@seeds.com',
            'password' => bcrypt('123456')
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
