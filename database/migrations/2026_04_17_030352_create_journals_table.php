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
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Cardiology and Cardiovascular Medicine
            $table->string('image')->nullable(); // journal image path
            $table->string('issn')->unique(); // 2572-9292
            $table->string('nlm_id')->nullable(); // PubMed NLM ID
            $table->decimal('impact_factor', 8, 2)->default(0); // 5.6
            $table->boolean('is_active')->default(true);
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journals');
    }
};
