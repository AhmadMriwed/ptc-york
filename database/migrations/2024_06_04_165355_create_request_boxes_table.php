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
        Schema::create('request_boxes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->timestamp('show_date')->nullable();
            $table->foreignId('send_id')->nullable()->references('id')->on('users')->onDelete('set null');
            $table->foreignId('recived_id')->nullable()->references('id')->on('users')->onDelete('set null');
            $table->foreignId('request_type_id')->nullable()->references('id')->on('request_types')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_boxes');
    }
};
