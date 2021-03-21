<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->references('id')->on('clients');
<<<<<<< HEAD
            $table->foreignId('product_id')->references('id')->on('clients');
=======
            $table->foreignId('product_id')->references('id')->on('products');
>>>>>>> f9b096ac626b221ae7e6847fe9948a9fe79d77b6
            $table->integer('value');
            $table->integer('cant');
            $table->string('direction');
            $table->enum('priority',['baja','media','alta']);
            $table->date('dateDelivery');
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
        Schema::dropIfExists('orders');
    }
}
