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
        Schema::create('car_details', function (Blueprint $table) {
            $table->id();
            $table->string('executive_name', 100)->nullable();
            $table->string('address')->nullable();
            $table->string('name', 100);
            $table->string('email');
            $table->string('registration_no', 100);
            $table->string('model', 50);
            $table->year('manufacturing_year')->nullable();
            $table->string('body_type')->nullable();
            $table->date('registration_on')->nullable();
            $table->date('fitness_to')->nullable();
            $table->date('tax_valid_to')->nullable();
            $table->date('permit_valid_to')->nullable();
            $table->date('insurance_valid_to')->nullable();
            $table->string('rto_city', 50)->nullable();
            $table->string('vehicle_color', 50)->nullable();
            $table->string('odometer', 50)->nullable();
            $table->string('fuel', 50)->nullable();
            $table->string('accident', 50)->nullable();
            $table->double('refurbishing_cost', 50)->nullable();
            $table->double('expected_price')->nullable();
            $table->string('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_details');
    }
};