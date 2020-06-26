<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description');
            $table->double('price');
            $table->string('slug');
            $table->boolean('stock')->default(true);
            $table->string('type')->nullable();
            $table->double('rating')->default('0');
            $table->double('discount')->default('0');
            $table->unsignedInteger('likes')->default('0');
            $table->unsignedBigInteger('subcategory_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('user_id')->nullable();
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
        Schema::dropIfExists('products');
    }
}
