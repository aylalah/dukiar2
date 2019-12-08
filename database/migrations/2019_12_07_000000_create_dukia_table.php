<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDukiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dukia_club', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id', 10)->unique();
            $table->string('accumulated_point_id')->nullable();
            $table->string('redeem_id');
            $table->string('benefit_id');
            $table->enum('status', ['1', '0'])->default('1');
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
        Schema::dropIfExists('dukia_club');
    }
}
