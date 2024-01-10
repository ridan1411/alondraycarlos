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
        Schema::create('couples', function (Blueprint $table) {
            $table->id();
            $table->string('bride_name')->nullable();
            $table->string('bride_last_name')->nullable();
            $table->string('bride_second_last_name')->nullable();
            $table->string('groom_name')->nullable();
            $table->string('groom_last_name')->nullable();
            $table->string('groom_second_last_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('couples');
    }
};
