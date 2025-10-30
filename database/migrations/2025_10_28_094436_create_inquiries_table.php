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
        Schema::create('contact_inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('mobile', 20);
            $table->string('email', 100);
            $table->string('program_type', 50);
            $table->string('duration', 50);
            $table->string('course', 150);
            $table->string('education', 255);
            $table->string('batchdays', 150);
            $table->string('batchtiming', 150);
            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_inquiries'); // ✅ corrected table name
    }
};
