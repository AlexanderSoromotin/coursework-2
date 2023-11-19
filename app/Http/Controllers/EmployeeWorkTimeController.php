<?php

namespace App\Http\Controllers;

use App\Models\EmployeeWorkTime;
use Illuminate\Http\Request;

class EmployeeWorkTimeController extends Controller
{
    public function index(Request $request, $id) {

        $workTime = EmployeeWorkTime::where("employee_id", $id)->orderBy("date", "desc")->get();

        return response()->json(['data' => $workTime], 201);;
    }

    public function store(Request $request, $id) {
        EmployeeWorkTime::create([
            "user_id" => 1,
            "start_time" => $request->start_time,
            "end_time" => $request->end_time,
            "employee_id" => $id,
            "date" => $request->date
        ]);
    }
}
