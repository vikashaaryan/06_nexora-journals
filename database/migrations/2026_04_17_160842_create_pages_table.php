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
      Schema::create('pages', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->foreignId('journal_id')->nullable()->constrained('journals')->onDelete('cascade');
    $table->text('short_description')->nullable();
    $table->boolean('show_eboard_list')->default(false);
    $table->integer('eboard_limit')->nullable();
    $table->boolean('show_issue_volume')->default(false);
    $table->string('page_link')->nullable();
    $table->longText('long_description')->nullable();
    $table->string('meta_title')->nullable();
    $table->text('meta_description')->nullable();
    $table->text('meta_keyword')->nullable();
    $table->boolean('is_active')->default(true);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
