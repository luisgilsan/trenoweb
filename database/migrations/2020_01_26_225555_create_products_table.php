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
            $table->string('name', 255);
            $table->string('description', 255);

            $table->float('cost', 10, 2);
            $table->float('sale_price',10, 2);
            $table->string('sale_description',255)->nullable();
            $table->string('picture', 50)->nullable();
            $table->boolean('discount')->nullable();
            $table->boolean('discount_amount')->nullable();
            $table->boolean('for_sale')->nullable();
            $table->integer('data_sheet_id')->nullable();
            $table->string('model', 50)->nullable();
            $table->string('code', 50)->nullable();

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
