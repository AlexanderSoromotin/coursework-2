<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\File;
use App\Models\FilesGroup;
use App\Models\User;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function getEmployeeFiles($id) {
        $employee = Employee::find($id);

        $files = File::where("employee_id", $id)->get();

        return response()->json(['data' => $files], 201);
    }

    public function index($employeeId, $groupId) {

        $files = File::where("employee_id", $employeeId)->where("file_group_id", $groupId)->get();

        return response()->json(['data' => $files], 201);
    }

    public function store(Request $request, $employeeId, $groupId)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            // Определите директорию, куда нужно сохранить файл
            $directory = "storage";

            // Сохраните файл с определенным именем
            $fileName = uniqid() . '_' . $file->getClientOriginalName();

            // Переместите файл в public/img/avatars
            $file->move(public_path($directory), $fileName);

            $file = File::create([
                "employee_id" => $employeeId,
                "file_group_id" => $groupId,
                "name" => $request->name,
                "url" => $fileName,
            ]);

            return response()->json(['message' => 'File uploaded successfully', 'data' => $file]);
        }

        return response()->json(['error' => 'No file provided.'], 400);
    }

    public function destroy($id) {

        File::find($id)->delete();

        return response()->json(['message' => "File deleted successfully"], 201);
    }
}
