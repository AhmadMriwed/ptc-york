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
        Schema::create('request_box_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('request_boxes_id')->nullable()->references('id')->on('request_boxes')->onDelete('cascade');
            $table->foreignId('files_id')->nullable()->references('id')->on('files');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_box_files');
    }
};
