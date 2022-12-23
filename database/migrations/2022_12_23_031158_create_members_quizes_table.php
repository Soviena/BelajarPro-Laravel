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
        Schema::create('members_quizes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->constrained('members')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('quizes_id')->constrained('quizes')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('score');
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
        Schema::dropIfExists('members_quizes');
    }
};
