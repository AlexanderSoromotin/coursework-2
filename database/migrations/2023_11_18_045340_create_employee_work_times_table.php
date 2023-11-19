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
        Schema::create('employee_work_times', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id")->nullable();
            $table->unsignedBigInteger("employee_id");
            $table->timestamp("date");
            $table->time("start_time");
            $table->time("end_time");
            $table->timestamps();

            // Добавляем связь с таблицей employees
            $table->foreign("employee_id")->references("id")->on("employees");

            // Добавляем связь с таблицей users
            $table->foreign("user_id")->references("id")->on("users")->onDelete("set null");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_work_times');
    }
};
