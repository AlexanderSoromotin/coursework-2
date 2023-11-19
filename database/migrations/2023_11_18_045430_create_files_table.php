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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("employee_id")->nullable();
            $table->unsignedBigInteger("file_group_id")->nullable();
            $table->string("name");
            $table->string("url");
            $table->timestamps();

            // Добавляем связь с таблицей employees
            $table->foreign("employee_id")->references("id")->on("employees")->onDelete("set null");

            // Добавляем связь с таблицей file_groups
            $table->foreign("file_group_id")->references("id")->on("files_groups")->onDelete("set null");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
