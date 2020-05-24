<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("users", function(Blueprint $table) {
            $table->increments("id");
            $table->string("avatar", 255);
            $table->string("name", 30);
            $table->string("lastname", 30);
            $table->string("email", 40);
            $table->string("password", 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists("users");
    }
}
