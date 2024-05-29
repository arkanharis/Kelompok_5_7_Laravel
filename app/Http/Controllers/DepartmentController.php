<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function create()
    {
        return view('add_department');
    }

    public function store(Request $request)
    {
        $request->validate([
            'department_name' => 'required',
            'department_short_name' => 'required',
            'department_code' => 'required',
        ]);

        $department = new Department();
        $department->name = $request->department_name;
        $department->short_name = $request->department_short_name;
        $department->code = $request->department_code;
        $department->save();

        return redirect()->route('department.create')->with('success', 'Department added successfully');
    }
}
