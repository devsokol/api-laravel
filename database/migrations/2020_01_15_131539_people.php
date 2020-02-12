<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class People extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('people')) {
            Schema::create('people', function(Blueprint $table) {
                $table->increments('id');
                $table->string('first_name', 100);
                $table->string('last_name', 100)->nullable();
                $table->integer('role_id')->unsigned();
                $table->timestamps();

                // foreign key
                $table->foreign('role_id')->references('id')->on('roles');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
