<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('number_of_days');
            $table->unsignedSmallInteger('rate');
            $table->text('description');
            $table->string('image');
            $table->text('location');
            $table->double('price');
            $table->float('discount');
            $table->date('date');
            $table->string('name');
            $table->string('icon');
            $table->foreignId('country_id')->constrained()->cascadeOnDelete();
            $table->foreignId('travel_type_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('tours');
    }
}
