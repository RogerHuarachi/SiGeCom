<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('type', 8, 2);
            $table->string('product');
            $table->string('sequence');
            $table->string('operation');
            $table->double('mca', 8, 2)->nullable();
            $table->double('sca', 8, 2)->nullable();
            $table->double('rt', 8, 2)->nullable();
            $table->boolean('state')->default(false);
            $table->unsignedBigInteger('user_id');

            $table->timestamps();

            //relation
            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('folders');
    }
}
