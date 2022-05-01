<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArduinoDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arduino_data', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('datatype');
            $table->float('value');
            $table->dateTime('valuedatetime');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arduino_data');
    }
}
