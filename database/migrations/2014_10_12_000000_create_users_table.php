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
            $table->enum('role', ['user' , 'admin'])->default('user');
            $table->string('user_avatar')->nullable();
            $table->string('user_bg')->nullable();
            $table->string('name');
            $table->string('surname');
            $table->text('about_me');
            $table->string('country');
            $table->string('city');
            $table->string('phone');
            $table->string('telegram_link');
            $table->string('whatsapp_link');
            $table->string('social_email');
            $table->string('github_link');
            $table->string('website_link');
            $table->text('stack');
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
