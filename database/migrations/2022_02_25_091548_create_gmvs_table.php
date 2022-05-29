<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGmvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gmvs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item');
            $table->double('amount', 10, 2);
            $table->double('price', 10, 2);
            $table->double('total', 10, 2);
            $table->string('frequency');
            $table->double('totalmes', 10, 2);
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
        Schema::dropIfExists('gmvs');
    }
}
