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
            $table->increments('id')->unique();
            $table->integer('company');
            $table->char('name');
            $table->text('description');
            $table->text('address');
            $table->text('duration');
            $table->integer('type');
            $table->char('picture');
            $table->integer('participants');
            $table->integer('city');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('creation_date');
            $table->date('closure_date');
            $table->integer('cost');
            $table->text('conditions');
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
