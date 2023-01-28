<?php

use App\Models\CarModel;
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
        Schema::create('cars', function (Blueprint $table) {
            $table->string('car_id')->unique();
            $table->foreignId('model_id');
            $table->string('car_name');
            $table->bigInteger('price');
            $table->integer('combustion_power');
            $table->string('type_fuel');
            $table->string('transmition');
            $table->string('spesification');
            $table->string('address');
            $table->string('color');
            $table->float('width');
            $table->float('weight');
            $table->string('upholstery');
            $table->float('length');
            $table->float('height');
            $table->integer('max_speed');										
            // $table->text('image_url'); 
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
        Schema::dropIfExists('cars');
    }
};
