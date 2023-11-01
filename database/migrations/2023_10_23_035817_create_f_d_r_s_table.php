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
        Schema::create('f_d_r_s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('account_number');
            $table->bigInteger('ammount');
            $table->bigInteger('withdraw_amount')->nullable();
            $table->bigInteger('interest');
            $table->bigInteger('interest_amount')->nullable();
            $table->bigInteger('total_amount')->nullable();
            $table->bigInteger('month');
            $table->string('close_date');
            $table->string('status')->default(1);

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
        Schema::dropIfExists('f_d_r_s');
    }
};
