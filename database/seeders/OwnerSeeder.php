<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('owners')->insert([
            [
                'name' => 'test1',
                'email' => 'test1@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/8/13 11:11:11',
            ],
            [
                'name' => 'test2',
                'email' => 'test2@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/8/13 11:11:11',
            ],
            [
                'name' => 'test3',
                'email' => 'test3@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/8/13 11:11:11',
            ],
            [
                'name' => 'test4',
                'email' => 'test4@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/8/13 11:11:11',
            ],
            [
                'name' => 'test5',
                'email' => 'test5@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/8/13 11:11:11',
            ],
            [
                'name' => 'test6',
                'email' => 'test6@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/8/13 11:11:11',
            ],
            [
                'name' => 'test7',
                'email' => 'test7@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/8/13 11:11:11',
            ],
            [
                'name' => 'test8',
                'email' => 'test8@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/8/13 11:11:11',
            ],
            [
                'name' => 'test9',
                'email' => 'test9@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/8/13 11:11:11',
            ],
            [
                'name' => 'test10',
                'email' => 'test10@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/8/13 11:11:11',
            ],
        ]);
    }
}
