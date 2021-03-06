<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('creditor');
            $table->double('share', 10, 2);
            $table->double('balace', 10, 2);
            $table->string('state');
            $table->double('value', 10, 2);
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
        Schema::dropIfExists('passives');
    }
}
