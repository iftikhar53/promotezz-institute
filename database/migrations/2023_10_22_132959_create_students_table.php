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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('branch_id');
            $table->string('name');
            $table->string('father_name');
            $table->string('contact_no');
            $table->string('email');
            $table->string('age');
            $table->string('address');
            $table->tinyInteger('status')->default(0); // 0 for disable, 1 for enable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
