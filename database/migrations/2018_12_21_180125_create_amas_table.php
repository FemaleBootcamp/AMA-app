<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);
            $table->text('content');
            $table->string('person',50);
            $table->string('tags',255);
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('ama_announcement_id');
            $table->foreign('ama_announcement_id')->references('id')->on('ama_announcements');
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
        Schema::dropIfExists('amas');
    }
}
