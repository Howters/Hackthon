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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->integer('group_id')->default(0);
            $table->string('name');
            $table->string('email');
            $table->string('whatsapp');
            $table->string('line');
            $table->string('github');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('cv');
            $table->string('flazz')->default(0);
            $table->string('ktp')->default(0);
            $table->string('bukti')->default(0);
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
        Schema::dropIfExists('members');
    }
};
