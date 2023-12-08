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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->text('purpose_visit');
            $table->string('visitor_name')->length(500)->nullable();
            $table->string('company')->length(500)->nullable();
            $table->string('email')->length(50)->nullable();
            $table->string('cc_email')->length(50)->nullable();
            $table->date('visit_date')->nullable();
            $table->string('start_time')->length(50)->nullable();
            $table->string('end_time')->length(50)->nullable();
            $table->string('meeting_room')->length(50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
