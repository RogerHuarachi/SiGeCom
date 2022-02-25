<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mubs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('detail');
            $table->integer('amount');
            $table->string('unity');
            $table->string('frequency');
            $table->double('buy', 8, 2);
            $table->double('sale', 8, 2);
            $table->double('buysMonth', 8, 2);
            $table->double('saleMonth', 8, 2);
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
        Schema::dropIfExists('mubs');
    }
}
