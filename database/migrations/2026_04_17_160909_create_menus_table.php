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
       Schema::create('menus', function (Blueprint $table) {
    $table->id();
    $table->foreignId('journal_id')->constrained('journals')->onDelete('cascade');
    $table->foreignId('page_id')->nullable()->constrained('pages')->nullOnDelete();
    $table->unsignedBigInteger('parent_id')->nullable();
    $table->string('menu')->nullable(); // Journal Menu / Header Menu
    $table->string('menu_type')->default('page'); // page, custom
    $table->string('menu_link')->nullable();
    $table->text('short_description')->nullable();
    $table->string('meta_title')->nullable();
    $table->text('meta_description')->nullable();
    $table->string('menu_name');
    $table->string('slug');
    $table->integer('sort_order')->default(0);
    $table->boolean('is_active')->default(true);
    $table->timestamps();

    $table->foreign('parent_id')->references('id')->on('menus')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
