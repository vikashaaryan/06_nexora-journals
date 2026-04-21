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
        Schema::create('manu_scripts', function (Blueprint $table) {
             $table->id();

            $table->foreignId('journal_id')->constrained('journals')->onDelete('cascade');

            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('affiliation')->nullable();

            $table->string('manuscript_title');
            $table->longText('abstract');
            $table->text('keywords')->nullable();

            $table->string('file')->nullable();
            $table->json('co_authors')->nullable();

            $table->boolean('declaration_one')->default(false);
            $table->boolean('declaration_two')->default(false);
            $table->boolean('declaration_three')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manu_scripts');
    }
};
