<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('level');
            $table->string('activity');
            $table->string('profession');
            $table->string('responsable');
            $table->string('experience');
            $table->string('antiquity');
            $table->string('property');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('caedec_id');
            $table->timestamps();

            //relation
            $table->foreign('caedec_id')->references('id')->on('caedecs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('businesses');
    }
}
