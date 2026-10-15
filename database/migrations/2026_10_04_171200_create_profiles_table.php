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
            Schema::create('profiles', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
                $table->string('nisn', 20)->nullable();
                $table->string('grade_level', 50)->nullable();
                $table->string('avatar', 255)->nullable();
                $table->text('bio')->nullable();
                $table->string('career_goal', 255)->nullable();
                $table->string('phone_whatsapp', 20)->nullable();
                $table->json('social_links')->nullable();
                $table->string('selected_theme', 50)->nullable();
                $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
