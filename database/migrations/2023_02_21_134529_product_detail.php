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
        Schema::create('productDetail', function (Blueprint $table) {
            $table->foreign('idProduct')->conferences('id')->on('products');
            $table->foreign('idSize')->conferences('id')->on('sizes');
            $table->foreign('idColor')->conferences('id')->on('colors');
            $table->int('quality');
            $table->timestamps();
            $table->primary(['idProduct', 'idSize', 'idColor']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productDetail');
    }
};
