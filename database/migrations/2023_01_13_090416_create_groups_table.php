<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->integer('leader_id')->default(0);
            $table->string('name');
            $table->string('password');
            $table->integer('binusian')->default(0);
            $table->boolean('isAdmin')->default(0);
            $table->boolean('bukti')->default(0);
            $table->integer('memberCount')->default(0);



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
        Schema::dropIfExists('groups');
    }
};
