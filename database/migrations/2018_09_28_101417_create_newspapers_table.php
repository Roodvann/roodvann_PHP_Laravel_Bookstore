<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewspapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newspapers', function (Blueprint $table) {
            $table->increments('id');
            $table->double('price');
            $table->double('subscriptionPrice');
            $table->string('title');
            $table->integer('pages')->unsigned();
            $table->string('publisher');
            $table->integer('year')->unsigned();
            $table->integer('number');
            $table->integer('numsPerYear');
            $table->integer('isColor');
            $table->integer('size_id')->unsigned();

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
        Schema::dropIfExists('newspapers');
    }
}
