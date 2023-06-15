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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('number')->nullable();
            $table->string('address')->nullable();
            $table->string('emailid')->nullable();;
            $table->string('relation')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('school1')->nullable();
            $table->string('school2')->nullable();
            $table->string('college1')->nullable();
            $table->string('college2')->nullable();
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
        Schema::dropIfExists('users');
    }
};
