<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->unsignedbigInteger('id');
            $table->integer('revenue_stream_id');
            $table->integer('tax_payer_id');
            $table->integer('lg_id');
            $table->integer('payment_type_id');
            $table->integer('business_type_id');
            $table->integer('user_id');
            $table->boolean('status');
            $table->integer('amount');
            $table->timestamps();

            //foreign keys
            $table->foreign('revenue_stream_id')->references('id')->on('revenue_streams');
            $table->foreign('tax_payer_id')->references('id')->on('tax_payers');
            $table->foreign('lg_id')->references('id')->on('local_governments');
            $table->foreign('payment_type_id')->references('id')->on('payment_types');
            $table->foreign('business_type_id')->references('id')->on('business_types');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
