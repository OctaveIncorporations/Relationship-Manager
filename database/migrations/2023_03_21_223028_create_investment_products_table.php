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
        Schema::create('investment_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name', 50);
            $table->string('product_type', 50);
            $table->text('description');
            $table->string('status');
            $table->text('performance_analysis');
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
        Schema::dropIfExists('investment_products');
    }
};
