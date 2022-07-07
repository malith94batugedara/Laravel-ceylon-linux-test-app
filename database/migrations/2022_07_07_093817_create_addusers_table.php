<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addusers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nic');
            $table->string('address');
            $table->string('mobile');
            $table->string('email');
            $table->string('gender');
            $table->string('territory');
            $table->string('username');
            $table->string('password');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addusers');
    }
}
