<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->string('name');
            $table->string('lastName');
            $table->string('gender');
            $table->string('identification');
            $table->string('number');
            $table->string('extension')->nullable();
            $table->string('nit')->nullable();
            $table->string('birth');
            $table->string('age');
            $table->string('nacionality');
            $table->string('dependents')->nullable();
            $table->string('civil');
            $table->string('employment');
            $table->string('mobile');
            $table->string('landline')->nullable();
            $table->string('mainActivity');
            $table->string('secondaryActivity')->nullable();
            $table->unsignedBigInteger('folder_id');
            $table->timestamps();

            //relation
            $table->foreign('folder_id')->references('id')->on('folders')
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
        Schema::dropIfExists('clients');
    }
}
