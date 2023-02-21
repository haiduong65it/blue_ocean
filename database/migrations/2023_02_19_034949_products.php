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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nameProduct');
            $table->foreign('idType')->conferences('id')->on('types');
            $table->foreign('idTrademark')->conferences('id')->on('trademarks');
            $table->decimal('price',18,0);
            $table->longText('information');
            $table->longText('description');
            $table->string('image');
            $table->boolean('newProduct')->default(1);
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
};
