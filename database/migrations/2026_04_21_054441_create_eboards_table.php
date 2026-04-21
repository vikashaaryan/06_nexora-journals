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
        Schema::create('eboards', function (Blueprint $table) {
           $table->id();
            $table->foreignId('journal_id')->constrained('journals')->onDelete('cascade');

            $table->string('name');
            $table->string('designation')->nullable();
            $table->string('institution')->nullable();
            $table->text('address')->nullable();
            $table->string('image')->nullable();

            $table->text('short_description')->nullable();
            $table->longText('full_profile')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eboards');
    }
};
