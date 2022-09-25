<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OriginalTableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('original_tables')->insert([
            [
                'name' => 'スプラトゥーン3',
                'base_img_path' => 'sample_spla.png',
            ],
            [
                'name' => 'スプラトゥーン2',
                'base_img_path' => 'sample_spla.png',
            ],
            [
                'name' => 'ポーカー',
                'base_img_path' => 'sample_spla.png',
            ],
        ]);
    }
}
