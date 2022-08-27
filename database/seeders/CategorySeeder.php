<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('primary_categories')->insert([
            [
                'name' => 'スマートフォン',
                'sort_order' => 1,
            ],
            [
                'name' => 'カメラ',
                'sort_order' => 2,
            ],
            [
                'name' => 'PC・周辺機',
                'sort_order' => 3,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'iPhone',
                'sort_order' => 1,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'Android',
                'sort_order' => 2,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'デジタルカメラ',
                'sort_order' => 3,
                'primary_category_id' => 2,
            ],
            [
                'name' => 'アナログカメラ',
                'sort_order' => 4,
                'primary_category_id' => 2,
            ],
            [
                'name' => 'マイク',
                'sort_order' => 5,
                'primary_category_id' => 3,
            ],
        ]);
    }
}
