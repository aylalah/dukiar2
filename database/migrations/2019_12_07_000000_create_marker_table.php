<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarkerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marker', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('checker1');
            $table->string('checker2');
            $table->string('checker3');
            $table->string('invoice_id');
            $table->string('checker1_admin');
            $table->string('checker2_admin');
            $table->string('checker3_admin');
            $table->enum('status', ['1', '0'])->default('1');
            $table->date('date');
            $table->time('time');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marker');
    }
}
