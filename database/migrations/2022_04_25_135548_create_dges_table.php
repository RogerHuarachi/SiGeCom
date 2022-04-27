<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('business');
            $table->string('position');
            $table->string('employer');
            $table->date('date');
            $table->string('payment');
            $table->integer('year');
            $table->integer('month');
            $table->integer('son')->nullable();
            $table->integer('other')->nullable();
            $table->text('description');

            $table->unsignedBigInteger('client_id');
            $table->timestamps();

            //relation
            $table->foreign('client_id')->references('id')->on('clients')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dges');
    }
}
