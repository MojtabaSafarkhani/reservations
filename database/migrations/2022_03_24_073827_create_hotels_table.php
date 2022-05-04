<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('host_id')->constrained();
            $table->foreignId('city_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->string('name', 60);
            $table->string('phone', 30);
            $table->text('description');
            $table->text('address');
            $table->enum('is_published', ['wait', 'ok', 'nok'])->default('wait');
            $table->bigInteger('cost');
            $table->json('capacity');
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
        Schema::dropIfExists('hotels');
    }
}
