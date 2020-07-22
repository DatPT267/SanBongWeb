<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhongtnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phongtn', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->string('tenkhongdau');
            $table->string('image');
            $table->unsignedBigInteger('id_loai');
            $table->unsignedBigInteger('id_truong');
            $table->foreign('id_loai')->references('id')->on('loaiphong')->onDelete('cascade');
            $table->foreign('id_truong')->references('id')->on('truong')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phongtn');
    }
}
