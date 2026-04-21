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
        Schema::create('articles', function (Blueprint $table) {
             $table->id();

            $table->foreignId('journal_id')->constrained('journals')->onDelete('cascade');
            $table->foreignId('volume_id')->nullable()->constrained('volumes')->onDelete('set null');
            $table->foreignId('issue_id')->nullable()->constrained('issues')->onDelete('set null');

            $table->string('paper_title');
            $table->string('article_type')->nullable();
            $table->string('author_name');
            $table->string('page_number')->nullable();
            $table->year('year')->nullable();
            $table->string('doi')->nullable();
            $table->string('keywords')->nullable();
            $table->longText('abstract')->nullable();
            $table->string('upload_link')->nullable();
            $table->string('upload_doc')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
