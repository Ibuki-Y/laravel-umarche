<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => 'shop1',
                'information' => 'information1',
                'filename' => 'sample1.jpg',
                'is_selling' => true,
            ],
            [
                'owner_id' => 2,
                'name' => 'shop2',
                'information' => 'information2',
                'filename' => 'sample2.jpg',
                'is_selling' => true,
            ],
            [
                'owner_id' => 3,
                'name' => 'shop3',
                'information' => 'information3',
                'filename' => 'sample3.js',
                'is_selling' => false,
            ],
        ]);
    }
}
