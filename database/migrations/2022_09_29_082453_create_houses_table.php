<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{

    //https://laravel.com/docs/7.x/migrations#creating-columns

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->text('description')->nullable();
            $table->integer('sm')->comment('Metri quadri');
            $table->decimal('price', 10, 2);
            $table->string('energy_rating', 5)->nullable();
            $table->string('address', 255);
            $table->string('zip', 5);
            $table->string('province_code', 2);
            $table->string('city', 100);
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
        Schema::dropIfExists('houses');
    }
}
