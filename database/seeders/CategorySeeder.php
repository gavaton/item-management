<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->truncate();
        DB::table('primary_categories')->insert([
            [
                'id' => 1,
                'name' => '雑貨',
                'sort_order' => 1,
            ],

            [
                'id' => 2,
                'name' => '趣味',
                'sort_order' => 2,
            ],

            [
                'id' => 3,
                'name' => '生活',
                'sort_order' => 3,
            ],

        ]);
        DB::table('secondary_categories')->truncate();
        DB::table('secondary_categories')->insert([
            [
                'name' => 'アート',
                'sort_order' => 2,
                'primary_category_id' => 2
            ],

            [
                'name' => 'アニメ・漫画',
                'sort_order' => 2,
                'primary_category_id' => 2
            ],

            [
                'name' => '自然',
                'sort_order' => 3,
                'primary_category_id' => 3
            ],

            [
                'name' => '切手',
                'sort_order' => 4,
                'primary_category_id' => 1
            ],

            [
                'name' => '',
                'sort_order' => 5,
                'primary_category_id' => 2
            ],

            [
                'name' => '',
                'sort_order' => 6,
                'primary_category_id' => 2
            ],

            [
                'name' => '',
                'sort_order' => 7,
                'primary_category_id' => 3
            ],

            [
                'name' => '',
                'sort_order' => 8,
                'primary_category_id' => 3
            ],

            [
                'name' => '',
                'sort_order' => 9,
                'primary_category_id' => 3
            ],


        ]);
    }
}
