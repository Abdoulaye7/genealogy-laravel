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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('created_by');
            $table->string('first_name',255);
            $table->string('last_name',255);
            $table->string('birth_name',255);
            $table->string('middle_names',255);
            $table->dateTime('date_of_birth')->nullable();

            $table->timestamps();

            $table->index('created_by'); // Index sur created_by
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
