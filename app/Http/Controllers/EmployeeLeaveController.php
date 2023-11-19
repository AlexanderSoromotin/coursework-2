<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeLeave;
use App\Models\LeaveType;
use Illuminate\Http\Request;

class EmployeeLeaveController extends Controller
{
    public function index($id) {

        $leaves = EmployeeLeave::where("employee_id", $id)
            ->orderBy("end_date", "desc")
            ->get();

        $modifiedLeaves = $leaves->map(function ($leave) {
            $type = LeaveType::find($leave->leave_type_id);
            $leave->leave_type_name = $type->name;
//            echo $leave->type_name;

            return $leave;
        });


        return response()->json(['data' => $modifiedLeaves], 201);
    }

    public function store(Request $request, $id) {
        $employeeLeave = EmployeeLeave::create([
            "employee_id" => $id,
            "leave_type_id" => $request->leave_type_id,
            "start_date" => $request->start_date,
            "end_date" => $request->end_date,
            "description" => $request->description
        ]);

        return response()->json(['message' => 'Leave created successfully', 'data' => $employeeLeave], 201);
    }
}
