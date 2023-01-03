<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableColumnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_columns')->insert([
              [
                'column_name' => 'test',
                'table_id' => 1,
                'detection_type' => 'Consistent',
                'range_x' => 0,
                'range_y' => 0,
                'range_h' => 110,
                'range_w' => 95,
            ],
            [
                'column_name' => 'weapon_name',
                'table_id' => 2,
                'detection_type' => 'Consistent',
                'range_x' => 0,
                'range_y' => 0,
                'range_h' => 100,
                'range_w' => 100,
            ],
            [
                'column_name' => 'special',
                'table_id' => 2,
                'detection_type' => 'Consistent',
                'range_x' => 100,
                'range_y' => 100,
                'range_h' => 100,
                'range_w' => 100,
            ],
            [
                'column_name' => 'is_win',
                'table_id' => 2,
                'detection_type' => 'Consistent',
                'range_x' => 1000,
                'range_y' => 1000,
                'range_h' => 100,
                'range_w' => 100,
            ],
        ]);
    }
}
