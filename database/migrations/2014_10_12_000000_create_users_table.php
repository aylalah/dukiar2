<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('bvn', 11)->unique();
            $table->string('user_id', 10)->unique();
            $table->string('api_token', 80)->unique()->nullable()->default(null);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('dob');
            $table->string('phoneno', 11);
            $table->Integer('wallet')->default(0);
            $table->string('bank_name')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('license')->nullable();
            $table->string('id_card')->nullable();
            $table->string('address')->nullable();
            $table->string('location')->nullable();
            $table->string('registration_address')->nullable();
            $table->string('business_address')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('date_of_incorporation')->nullable();
            $table->string('country_of_incorporation')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('dukia_club_id')->nullable();
            $table->string('image_path');
            $table->string('qrcode_path')->nullable();
            $table->enum('status', ['1', '0'])->default('1')->comment('0 means blocked; 1 means active');
            $table->enum('role', ['3','2','1'])->default('1')->comment('1 for individual; 2 for artisan; 3 for business');
            $table->enum('flag', ['3','2','1', '0'])->default('0')->comment('0 means no verification; 1 means email verification only; 2 means bvn verification; 3 means bth bvn and email verification');
            $table->string('notification_id')->nullable();
            $table->string('brand')->nullable();
            $table->string('api_level')->nullable();
            $table->string('device_type')->nullable();
            $table->string('system_version')->nullable();
            $table->string('operating_system')->nullable();
            $table->string('device_id')->nullable();
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('users');
    }
}
