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
            $table->uuid('idusers')->primary();
            $table->uuid('idroles');
            $table->uuid('idotp_codes');
            $table->string('name');
            $table->foreign('idroles')->references('idroles')->on('roles');
            $table->foreign('idotp_codes')->references('idotp_codes')->on('otp_codes');
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
