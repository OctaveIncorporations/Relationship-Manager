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
        Schema::create('investment_ideas', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('abstract', 100);
            $table->date('expiry_date');
            $table->string('author', 20);
            $table->text('content');
            $table->string('risk_rating', 1);
            $table->string('instruments', 50);
            $table->string('currency', 10);
            $table->string('major_sector', 20);
            $table->string('minor_sector', 20);
            $table->string('region', 20);
            $table->string('country', 20);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('manager_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('manager_id')->references('id')->on('relationship_managers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investment_ideas');
    }
};
