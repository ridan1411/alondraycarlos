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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('main')->nullable();
            $table->string('main_movil')->nullable();
            $table->string('bride')->nullable();
            $table->string('groom')->nullable();
            $table->string('event')->nullable();
            $table->string('event_movil')->nullable();
            $table->string('church')->nullable();
            $table->string('church_movil')->nullable();
            $table->string('party')->nullable();
            $table->string('party_movil')->nullable();
            $table->string('dress_code')->nullable();
            $table->string('assistance')->nullable();
            $table->string('assistance_movil')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
