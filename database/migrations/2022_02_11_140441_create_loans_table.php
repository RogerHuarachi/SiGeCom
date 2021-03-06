<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('money', 10, 2);
            $table->string('currency');
            $table->integer('rate');
            $table->integer('term');
            $table->integer('share');
            $table->string('frequency');
            $table->string('feeType');
            $table->integer('expiration');
            $table->double('choose', 10, 2);
            $table->string('warrantyOne');
            $table->string('warrantyTwo')->nullable();
            $table->string('destination');
            $table->string('detail');
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
        Schema::dropIfExists('loans');
    }
}
