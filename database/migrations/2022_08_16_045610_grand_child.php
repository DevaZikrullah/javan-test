<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GrandChild extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grandchild', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('child_id')->unsigned()->index();
            $table->foreign('child_id')->references('id')->on('child')->onDelete('cascade');
            $table->string('name');
            $table->string('gender');
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
        //
    }
}
