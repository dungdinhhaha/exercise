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
        Schema::create('joke_votes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_joke'); // Thêm cột id_joke
            $table->foreign('id_joke')->references('id')->on('joke')->onDelete('cascade'); // Tạo khóa ngoại với bảng jokes và cập nhật khi xóa
            $table->boolean('like')->default(0); // Thêm cột like và mặc định là false
            $table->boolean('dislike')->default(0); // Thêm cột dislike và mặc định là false
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
        Schema::dropIfExists('joke_votes');
    }
};
