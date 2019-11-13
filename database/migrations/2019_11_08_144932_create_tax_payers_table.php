<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxPayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_payers', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->integer('lg_id')->unsigned();
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->string('picture');
            $table->string('TIN');
            $table->string('employment_type');
            $table->string('finger_print');
            $table->timestamps();

            //foreign keys
            $table->foreign('lg_id')->references('id')->on('local_governments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tax_payers');
    }
}
