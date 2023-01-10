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
            $table->enum('admin',['TRUE','FALSE'])->default('FALSE');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->longText('biography')->default('');
            $table->string('no_hp')->default('');
            $table->longText('alamat')->default('');
            $table->string('profilePic')->default('');
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
