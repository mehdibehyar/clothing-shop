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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id1');
            $table->foreign('user_id1')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('user_id2')->nullable();
            $table->foreign('user_id2')->references('id')->on('users')->onDelete('cascade');
            $table->text('text_message');
            $table->boolean('response')->default(false);
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
        Schema::dropIfExists('messages');
    }
};
