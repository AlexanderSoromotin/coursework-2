<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeePosition;
use Illuminate\Http\Request;

class EmployeePositionController extends Controller
{
    public function store($employeeId, $positionId) {
        $employee = Employee::find($employeeId);

        $lastPosition = EmployeePosition::where("employee_id", $employeeId)->where("end_date", null)->get()->first();

        if (empty($lastPosition)) {
            EmployeePosition::create([
                "employee_id" => $employeeId,
                "position_id" => $positionId,
                "start_date" => date("Y-m-d H:i:s"),
            ]);
        } else {
            if ($lastPosition->position_id == $positionId) {
                return;
            }

            $lastPosition->end_date = date("Y-m-d H:i:s");
            $lastPosition->save();

            EmployeePosition::create([
                "employee_id" => $employeeId,
                "position_id" => $positionId,
                "start_date" => date("Y-m-d H:i:s"),
            ]);
        }
    }

    public function destroy($id) {
        Employee::find($id)->delete();
    }
}
