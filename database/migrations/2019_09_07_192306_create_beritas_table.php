<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeritasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('preview');
            $table->longText('isi');
            $table->string('cover')->nullable();
            $table->string('sumber');
            $table->boolean('is_draft')->default('0');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beritas');
    }
}