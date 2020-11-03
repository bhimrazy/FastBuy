<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->references('id')->on('users')->index();
            $table->integer('admin_id')->unsigned()->references('id')->on('admins')->index();
            $table->string('module', 60)->index();
            $table->text('request')->nullable();
            $table->string('action', 120);
            $table->text('user_agent')->nullable();
            $table->string('ip_address', 25)->nullable();
            $table->integer('reference_user')->unsigned();
            $table->integer('reference_id')->unsigned();
            $table->string('reference_name', 255);
            $table->string('type', 20);
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
        Schema::dropIfExists('audit_histories');
    }
}
