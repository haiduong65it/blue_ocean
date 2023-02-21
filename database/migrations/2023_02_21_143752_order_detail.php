<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderDetail', function (Blueprint $table) {
            $table->foreign('idOrder')->conferences('id')->on('orders');
            $table->foreign('idProduct')->conferences('id')->on('products');
            $table->foreign('idSize')->conferences('id')->on('sizes');
            $table->foreign('idColor')->conferences('id')->on('colors');
            $table->int('quality');
            $table->decimal('price',18,0);
            $table->timestamps();
            $table->primary(['idOrder','idProduct', 'idSize', 'idColor']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderDetail');
    }
};
