<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->insert([
            [
                'teacher_data_id' => 1,
                'original_table_id' => 1,
                'column_id' => 1,
            ],
            [
                'teacher_data_id' => 1,
                'original_table_id' => 1,
                'column_id' => 1,
            ],
            [
                'teacher_data_id' => 2,
                'original_table_id' => 1,
                'column_id' => 1,
            ],
        ]);
    }
}
