<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('service_id', 70)->unique();
            $table->string('equipment_id', 50);
            $table->string('user_id', 10);
            $table->string('location');
            $table->string('purpose');
            $table->string('ton');
            $table->enum('status', ['1', '0'])->default('1');
            $table->Integer('amount');
            $table->Integer('department');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment_services');
    }
}
