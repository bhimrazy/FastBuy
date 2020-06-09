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
            $table->string('firstname');
            $table->string('lastname');
            $table->string('type');
            $table->string('email')->unique();
            $table->string('mobile')->nullable();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->boolean('verified_email')->default(false);
            $table->boolean('verified_mobile')->default(false);
            $table->string('email_token')->nullable();
            $table->string('mobile_token')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedBigInteger('billing_address')->nullable();
            $table->unsignedBigInteger('shipping_address')->nullable();
            $table->rememberToken();
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
