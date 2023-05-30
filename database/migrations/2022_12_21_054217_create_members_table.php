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
            $table->longText('biography')->nullable($value = true);
            $table->string('no_hp')->nullable($value = true);
            $table->longText('alamat')->nullable($value = true);
            $table->string('profilePic')->nullable($value = true);	
            $table->enum('verified',['TRUE','FALSE'])->default('FALSE');
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
