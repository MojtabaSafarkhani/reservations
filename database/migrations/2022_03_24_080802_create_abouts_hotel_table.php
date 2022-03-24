<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts_hotel', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id')->unique()->constrained();
            $table->tinyInteger('capacity');
            $table->string('quantity_beds', 60);
            $table->string('quantity_bathroom', 60);

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
        Schema::dropIfExists('abouts_hotel');
    }
}
