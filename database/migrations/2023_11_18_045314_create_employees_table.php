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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->default("Имя");
            $table->string('last_name')->default("Фамилия");
            $table->string('patronymic')->default("Отчество")->nullable();
            $table->string('personal_phone_number')->nullable();
            $table->string('work_phone_number')->nullable();
            $table->timestamp('birthdate')->nullable();
            $table->string('gender')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->unsignedBigInteger('bank_id')->nullable();
            $table->unsignedBigInteger('passport_serial')->nullable();
            $table->unsignedBigInteger('passport_number')->nullable();
            $table->unsignedBigInteger('snils_number')->nullable();
            $table->unsignedBigInteger('inn')->nullable();
            $table->timestamp('hire_date')->nullable();
            $table->string('avatar')->default("unknown_user.png");
            $table->timestamps();
            $table->softDeletes();

            // Добавляем связь с таблицей banks
            $table->foreign("bank_id")->references("id")->on("banks")->onDelete("set null");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
