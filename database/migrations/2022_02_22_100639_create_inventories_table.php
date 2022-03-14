<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('activity');
            $table->string('type');
            $table->double('amount', 8, 2);
            $table->string('unit');
            $table->string('name');
            $table->double('buys', 8, 2)->nullable();
            $table->double('sale', 8, 2)->nullable();
            $table->double('mb', 8, 2)->nullable();
            $table->double('advance', 8, 2)->nullable();
            $table->double('vimp', 8, 2)->nullable();
            $table->double('vipp', 8, 2)->nullable();
            $table->double('vipt', 8, 2)->nullable();
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
        Schema::dropIfExists('inventories');
    }
}
