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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('login')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['user', 'admin', 'blocked'])->default('user');
            $table->string('user_avatar')->nullable();
            $table->string('user_bg')->nullable();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->text('about_me')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            $table->string('telegram_link')->nullable();
            $table->string('whatsapp_link')->nullable();
            $table->string('social_email')->nullable();
            $table->string('github_link')->nullable();
            $table->string('website_link')->nullable();
            $table->text('stack')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
