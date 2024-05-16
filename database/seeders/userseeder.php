<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

        [
            'name'=> 'Jhon Rodrigues',
            'username'=> 'Jhonr17',
            'email'=> 'Jhonyrod17@hotmail.com',
            'role'=> 'admin',
            'status'=> 'active',
            'password'=> bcrypt('123456789')
        ],

        [
            'name'=> 'Aricia Nascimentos',
            'username'=> 'Aricia',
            'email'=> 'arica2023@hotmail.com',
            'role'=> 'secretario',
            'status'=> 'active',
            'password'=> bcrypt('123456789')
        ],
        [
            'name'=> 'Wander Miguel',
            'username'=> 'Wander',
            'email'=> 'miguel2023@hotmail.com',
            'role'=> 'tecnico',
            'status'=> 'active',
            'password'=> bcrypt('123456789')
        ],
        [
            'name'=> 'Paula Fernandes',
            'username'=> 'Paula',
            'email'=> 'paula2023@hotmail.com',
            'role'=> 'user',
            'status'=> 'active',
            'password'=> bcrypt('123456789')
        ],
        [
            'name'=> 'Diogenes Pedro',
            'username'=> 'Pedro',
            'email'=> 'pedro2023@hotmail.com',
            'role'=> 'gerente',
            'status'=> 'active',
            'password'=> bcrypt('123456789')
        ],
        ]);
    }
}
