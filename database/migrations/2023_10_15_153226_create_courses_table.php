<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('slug');
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->decimal('fee', 10, 2)->default(0);
            $table->string('CourseBanner')->nullable();
            $table->string('CourseLogo')->nullable();
            $table->enum('ShowInHome', ['Yes', 'No'])->default('No');    
            $table->tinyInteger('status')->default(0); // 0 for disable, 1 for enable
            $table->foreignId('user_id')->default(2);
            $table->foreignId('branch_id')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};