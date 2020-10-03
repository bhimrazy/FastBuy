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
            $table->string('name')->unique();
            $table->text('description');
            $table->text('attributes');
            $table->double('price');
            $table->string('slug')->unique();
            $table->string('sku');
            $table->unsignedInteger('quantity');
            $table->boolean('stock')->default(true);
            $table->string('product_type')->nullable();
            $table->double('rating')->default('0');
            $table->double('discount')->default('0');
            $table->unsignedInteger('likes')->default('0');
            $table->boolean('status')->default(1);
            $table->boolean('featured')->default(0);
            $table->unsignedBigInteger('subcategory_id');
            $table->unsignedBigInteger('brand_id')->index();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();

            //$table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
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
