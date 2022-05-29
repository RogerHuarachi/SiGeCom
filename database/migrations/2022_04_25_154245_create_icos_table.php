<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIcosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->double('sb', 10, 2);
            $table->double('al', 10, 2);
            $table->double('od', 10, 2)->nullable();
            $table->double('oi', 10, 2)->nullable();
            $table->double('ld', 10, 2);

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
        Schema::dropIfExists('icos');
    }
}
