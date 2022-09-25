<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_records', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_value')->comment('教師データ');
            $table->string('teacher_img_path')->comment('教師データとなる画像');
            $table->integer('original_table_id')->comment('対応するテーブルの外部キー');
            $table->integer('column_id')->comment('対応するカラムの外部キー');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_records');
    }
};
