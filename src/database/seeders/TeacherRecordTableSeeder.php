<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherRecordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teacher_records')->insert([
            [
                'teacher_value' => 'スプラシューター',
                'teacher_img_path' => 'img/weapon1.png',
                'original_table_id' => 1,
                'column_id' => 1,
            ],
            [
                'teacher_value' => 'スプラシューターコラボ',
                'teacher_img_path' => 'img/weapon2.png',
                'original_table_id' => 1,
                'column_id' => 1,
            ],
            [
                'teacher_value' => 'ホットブラスター',
                'teacher_img_path' => 'img/weapon4.png',
                'original_table_id' => 1,
                'column_id' => 1,
            ],
        ]);
    }
}
