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
    Schema::create('businesses', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->cascadeOnDelete();

        $table->string('name');
        $table->string('category')->nullable();
        $table->string('city');
        $table->text('address')->nullable();

        $table->string('phone')->nullable();
        $table->string('email')->nullable();
        $table->text('description')->nullable();

        $table->string('website_url')->nullable();
        $table->string('facebook_url')->nullable();
        $table->string('instagram_url')->nullable();
        $table->string('google_business_url')->nullable();

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
