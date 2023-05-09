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
        Schema::create('webusers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fullname', 255)->notNullable();
            $table->string('username', 255)->unique()->notNullable();
            $table->string('email', 255)->unique()->notNullable();
            $table->string('password', 255)->notNullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webusers');
    }
};
