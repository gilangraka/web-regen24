<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('nama');
            $table->string('nim');
            $table->string('email');
            $table->string('id_login');
            $table->string('password');
            $table->unsignedInteger('role_id'); //Foreign Key
            $table->foreign('role_id')->references('role_id')->on('ref_role_id');
            $table->boolean('status_memilih');
            $table->unsignedInteger('pilihan_id'); //Foreign Key
            $table->foreign('pilihan_id')->references('id_camin')->on('camin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
