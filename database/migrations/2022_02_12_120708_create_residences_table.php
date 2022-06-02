<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('property');
            $table->string('time');
            $table->string('direction');
            $table->string('number')->nullable();
            $table->string('zone');
            $table->string('mobile')->nullable();
            $table->string('province');
            $table->text('description');
            $table->string('domlat')->nullable();
            $table->string('domlon')->nullable();
            $table->string('file', 128);
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
        Schema::dropIfExists('residences');
    }
}
