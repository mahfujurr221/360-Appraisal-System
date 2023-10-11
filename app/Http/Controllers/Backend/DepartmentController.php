<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::select('id', 'name')->get();
        return view('backend.pages.department.index', compact('departments'));
    }

    public function store(Request $request)
    {
        Department::create($request->all());
        toastr()->success('Department created successfully');
        return back();
    }

    public function update(Request $request, string $id)
    {
        $department = Department::find($id);
        $department->update($request->all());
        toastr()->success('Department updated successfully');
        return back();
    }

    public function destroy(string $id)
    {
        $department = Department::find($id);
        $department->delete();
        toastr()->success('Department deleted successfully');
        return back();
    }
}