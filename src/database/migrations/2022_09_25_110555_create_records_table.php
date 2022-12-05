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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            // $table->integer('teacher_data_id')->comment('検出したデータの外部キー');
            $table->string('img_path');
            $table->string('value');
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
        Schema::dropIfExists('records');
    }
};
