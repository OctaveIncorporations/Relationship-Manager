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
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('username', 50);
            $table->string('phone_number', 50)->nullable();
            $table->string('email', 50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('address', 100)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('country', 50);
            $table->string('postal_code', 20);
            $table->string('account_type', 20);
            $table->decimal('account_balance', 12, 2);
            $table->string('investment_style', 50);
            $table->string('investment_goal', 50);
            $table->string('investment_horizon', 50);
            $table->string('employment_status', 50);
            $table->decimal('annual_income', 12, 2);
            $table->string('risk_tolerance', 20);
            $table->decimal('net_worth', 12, 2);
            $table->decimal('investment_amount', 12, 2);
            $table->string('password');
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
