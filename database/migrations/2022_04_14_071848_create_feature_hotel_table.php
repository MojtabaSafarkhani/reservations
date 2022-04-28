<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeatureHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_hotel', function (Blueprint $table) {

            $table->foreignId('hotel_id')->constrained();
            $table->foreignId('feature_id')->constrained();

            $table->primary(['hotel_id', 'feature_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feature_hotel');
    }
}
