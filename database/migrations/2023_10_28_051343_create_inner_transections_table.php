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
        Schema::create('inner_transections', function (Blueprint $table) {
            $table->id();
            $table->string('transection_type')->comment('1=income,2=expense');
            $table->string('purpose');
            $table->string('expense_by')->nullable();
            $table->string('amount');
            $table->string('status');
            $table->string('date');
            $table->string('income_from');
            $table->string('transection_date')->nullable();
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
        Schema::dropIfExists('inner_transections');
    }
};
