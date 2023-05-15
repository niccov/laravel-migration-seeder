<?php

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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('company', 50);
            $table->string('start-station', 50);
            $table->string('arrive-station', 50);
            $table->string('departure-time', 5)->nullable();
            $table->string('arrival-time', 5)->nullable();
            $table->string('train-code', 5);
            $table->boolean('is-in-time')->nullable();
            $table->boolean('is-cancelled')->nullable();

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
        Schema::dropIfExists('trains');
    }
};
