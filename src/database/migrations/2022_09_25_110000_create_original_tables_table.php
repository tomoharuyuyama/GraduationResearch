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
        Schema::create('original_tables', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('ユーザーが作成したテーブルの名前');
            $table->string('base_img_path')->comment('base img のパス情報');
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
        Schema::dropIfExists('original_tables');
    }
};
