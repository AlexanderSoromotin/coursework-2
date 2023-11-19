<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeLeaveController;
use App\Http\Controllers\EmployeePositionController;
use App\Http\Controllers\EmployeeWorkTimeController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FilesGroupController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// Защищённые маршруты
Route::middleware(['auth:sanctum'])->group(function () {
    // Получение данных о пользователе
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Создание сотрудника
    Route::post('/employees', [EmployeeController::class, 'store']);

    // Получение списка сотрудников
    Route::get('/employees', [EmployeeController::class, 'index']);

    // Получение данных сотрудника
    Route::get('/employees/{id}', [EmployeeController::class, 'show']);

    // Обновление данных сотрудника
    Route::patch('/employees/{id}', [EmployeeController::class, 'update']);
    Route::post('/employees/{id}/avatar', [EmployeeController::class, 'setAvatar']);

    // Получение групп файлов
    Route::get('/files/groups', [FilesGroupController::class, 'index']);

    // Получение файлов сотрудников
    Route::patch('/employees/{id}/files', [FileController::class, 'getEmployeeFiles']);

    // Загрузка файла сотрудника
    Route::post('/employees/{employeeId}/file-groups/{groupId}/files', [FileController::class, 'store']);

    // Получение файлов сотрудника из определённой группы
    Route::get('/employees/{employeeId}/file-groups/{groupId}/files', [FileController::class, 'index']);

    // Удаление файла
    Route::delete('/files/{id}', [FileController::class, 'destroy']);

    // Создание отчёта по выбыванию сотрудника
    Route::post('/employees/{id}/leaves', [EmployeeLeaveController::class, 'store']);

    // Получение списка отчётов по выбыванию сотрудника
    Route::get('/employees/{id}/leaves', [EmployeeLeaveController::class, 'index']);

    // Создание отчёта по времени работы сотрудника
    Route::post('/employees/{id}/work-time', [EmployeeWorkTimeController::class, 'store']);

    // Получение списка отчётов по времени работы сотрудника
    Route::get('/employees/{id}/work-time', [EmployeeWorkTimeController::class, 'index']);

    // Изменение должности сотрудника
    Route::post('/employees/{employeeId}/positions/{positionId}', [EmployeePositionController::class, 'store']);

    // Увольнение сотрудника
    Route::delete('/employees/{employeeId}', [EmployeePositionController::class, 'destroy']);

    // Выход пользователя и удаление токена
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::post('/login', [AuthController::class, 'login']);

// Возвращение ошибки о некорректности токена
Route::any('/errorToken', function () {
    return response()->json(['message' => 'Unauthorized: Invalid token'], 401);
})->name("login");

