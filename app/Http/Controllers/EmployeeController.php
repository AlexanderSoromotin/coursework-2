<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{

    // Получение списка сотрудников
    public function index(Request $request) {

        // Получение всех сотрудников
        $employees = Employee::all();

        return response()->json(['data' => $employees], 201);
    }

    public function store(Request $request) {
        // Создание сотрудника
        $employee = Employee::create()->get()->last();

        return response()->json(['message' => 'Employee created successfully', 'data' => $employee], 201);
    }

    // Получение списка сотрудников
    public function show($id) {

        // Поиск сотрудника
        $employee = Employee::find($id)->load("position");

        return response()->json(['data' => $employee], 201);
    }

    // Обновление данных сотрудника
    public function setAvatar(Request $request, $id) {

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            // Определите директорию, куда нужно сохранить файл внутри public
            $directory = "img/avatars";

            // Сохраните файл с определенным именем
            $fileName = uniqid() . '_' . $file->getClientOriginalName();

            // Переместите файл в public/img/avatars
            $file->move(public_path($directory), $fileName);

            $employee = Employee::find($id);
            $employee->update([
                "avatar" => $fileName
            ]);

            return response()->json(['message' => 'Employee updated successfully', 'data' => $employee], 201);
        }

        return response()->json(['message' => 'Invalid file'], 400);
    }

    // Обновление данных сотрудника
    public function update(Request $request, $id) {

        $validator = Validator::make($request->all(), [
            'bank_account_number' => 'nullable|string:digits:11',
            'bank_id' => 'nullable|string|exists:banks,id',
            'birthdate' => 'nullable|date_format:Y-m-d H:i:s',
            'first_name' => 'string|max:255',
            'gender' => 'nullable|string|in:муж,жен',
            'hire_date' => 'nullable|date_format:Y-m-d H:i:s',
            'inn' => 'nullable|string|digits:10',
            'last_name' => 'string|max:255',
            'passport_number' => 'nullable|digits:6',
            'passport_serial' => 'nullable|digits:4',
            'patronymic' => 'nullable|string|max:255',
            'personal_phone_number' => ['nullable', 'string', 'regex:/^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$/'],
            'snils_number' => 'nullable|string|digits:11',
            'work_phone_number' => ['nullable', 'string', 'regex:/^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$/'],
        ]);

//        if ($validator->fails()) {
//            return response()->json(['errors' => $validator->errors()], 422);
//        }

        $validatedData = $validator->validated();

        // Обновления данных сотрудника
        $employee = Employee::find($id);
        $employee->update($validatedData);

        return response()->json(['message' => 'Employee updated successfully', 'data' => $employee], 201);
    }
}
