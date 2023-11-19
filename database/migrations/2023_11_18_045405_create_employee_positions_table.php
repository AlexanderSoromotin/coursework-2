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
        Schema::create('employee_positions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("employee_id");
            $table->unsignedBigInteger("position_id");
            $table->timestamp("start_date");
            $table->timestamp("end_date")->nullable();
            $table->timestamps();

            // Добавляем связь с таблицей employees
            $table->foreign("employee_id")->references("id")->on("employees")->onDelete("cascade");

            // Добавляем связь с таблицей positions
            $table->foreign("position_id")->references("id")->on("positions")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_positions');
    }
};
