<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->string('module', 60)->index();
            $table->text('request')->nullable();
            $table->string('action', 120);
            $table->text('user_agent')->nullable();
            $table->string('ip_address', 25)->nullable();
            $table->integer('reference_user')->unsigned();
            $table->integer('reference_id')->unsigned();
            $table->string('reference_name', 255);
            $table->string('type', 20);
            $table->string('url', 150);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('admin_id')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_histories');
    }
}
