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
        Schema::create('relationship_managers', function (Blueprint $table) {
            $table->id();
            $table->string('manager_name', 50);
            $table->string('email', 50);
            $table->string('password', 100);
            $table->text('biography')->nullable();
            $table->string('photo_url', 50)->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->string('location', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relationship_managers');
    }
};
