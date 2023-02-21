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
        Schema::create('productReview', function (Blueprint $table) {
            $table->id();
            $table->foreign('idProduct')->conferences('id')->on('products');
            $table->foreign('idCustomer')->conferences('id')->on('customers');
            $table->int('star');
            $table->string('review')->nullable();
            $table->string('image')->nullable();
            $table->date('reviewDate');
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
        Schema::dropIfExists('productReview');
    }
};
