<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnduhansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unduhans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('filename');
            $table->unsignedBigInteger('peraturan_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('peraturan_id')->references('id')->on('peraturans')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('unduhans');
    }
}
