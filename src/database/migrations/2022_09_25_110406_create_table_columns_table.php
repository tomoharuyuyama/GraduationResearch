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
        Schema::create('table_columns', function (Blueprint $table) {
            $table->id();
            $table->string('column_name')->comment('カラム名');
            $table->integer('table_id')->comment('original tables table との外部キー');
            $table->string('detection_type')->comment('どんな画像を検出するかを指定');
            $table->integer('range_x')->comment('画像を検出するX座標を指定');
            $table->integer('range_y')->comment('画像を検出するY座標を指定');
            $table->integer('range_h')->comment('画像を検出する高さをpxで指定');
            $table->integer('range_w')->comment('画像を検出する幅をpxで指定');
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
        Schema::dropIfExists('table_columns');
    }
};
