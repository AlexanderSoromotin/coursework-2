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
//        Schema::create('salaries', function (Blueprint $table) {
//            $table->id();
//            $table->unsignedBigInteger("employee_id");
//            $table->unsignedInteger("amount");
//            $table->timestamp("start_date");
//            $table->timestamp("end_end");
//            $table->timestamps();
//
//            // Добавляем связь с таблицей employees
//            $table->foreign("employee_id")->references("id")->on("employees")->onDelete("cascade");
//        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salaries');
    }
};
