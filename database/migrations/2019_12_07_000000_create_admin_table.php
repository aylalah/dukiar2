<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('phoneno', 11);
            $table->string('address');
            $table->string('password');
            $table->enum('status', ['1', '0'])->default('1');
            $table->enum('role_id', ['6','5','4','3','2','1'])->default('1')->comment('1 for operator; 2 for payer; 3 for logostic, 4 for processor');
            $table->timestamp('created_at')->useCurrent();
            $table->rememberToken()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
