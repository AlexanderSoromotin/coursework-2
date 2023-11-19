<?php

namespace App\Http\Controllers;

use App\Models\FilesGroup;
use Illuminate\Http\Request;

class FilesGroupController extends Controller
{
    // Получение списка сотрудников
    public function index(Request $request) {

        // Получение списка групп файлов
        $filesGroups = FilesGroup::all();

        return response()->json(['data' => $filesGroups], 201);
    }
}
