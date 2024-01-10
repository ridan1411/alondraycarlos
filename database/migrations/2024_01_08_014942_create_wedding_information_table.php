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
        Schema::create('wedding_information', function (Blueprint $table) {
            $table->id();
            $table->date('event_date')->nullable();
            $table->text('main_message')->nullable();
            $table->string('church')->nullable();
            $table->text('church_adress')->nullable();
            $table->string('church_map_link')->nullable();
            $table->time('time_church')->nullable();
            $table->string('party')->nullable();
            $table->text('party_adress')->nullable();
            $table->string('party_map_link')->nullable();
            $table->time('time_party')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wedding_information');
    }
};
