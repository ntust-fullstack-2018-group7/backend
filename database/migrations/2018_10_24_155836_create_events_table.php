<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url',45)->nullable();
            $table->string('title',45);
            $table->string('description',45);
            $table->string('hero_image',45)->nullable();
            $table->string('side_image',45)->nullable();
            $table->json('filter');
            $table->string('price_operation',45);
            $table->json('time_interval');
            $table->integer('frequency_limit')->default(0);
            $table->integer('priority')->default(0);
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
        Schema::dropIfExists('events');
    }
}
