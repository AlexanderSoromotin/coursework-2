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
        Schema::create('employee_leaves', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("employee_id");
            $table->unsignedBigInteger("leave_type_id")->nullable();
            $table->timestamp("start_date");
            $table->timestamp("end_date");
            $table->string("description")->nullable();
            $table->timestamps();

            // Добавляем связь с таблицей employees
            $table->foreign("employee_id")->references("id")->on("employees")->onDelete("cascade");

            // Добавляем связь с таблицей leave_types
            $table->foreign("leave_type_id")->references("id")->on("leave_types")->onDelete("set null");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_leaves');
    }
};
