<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::get();
        $departments = Department::select('id', 'dept_code')->get();
        $designations = Designation::select('id', 'name')->get();
        $roles = Roles::get();
        return view('backend.pages.employee.index', compact('employees', 'departments', 'designations', 'roles'));
    }
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $user = new User();
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->dept_id = $request->dept_id;
            $user->role_id = $request->role_id;
            $user->password = bcrypt('12345678');
            $user->save();

            if ($user) {
                $employee = new Employee();
                $employee->user_id = $user->id;
                $employee->name = $request->name;
                $employee->phone = $request->phone;
                $employee->email = $request->email;
                $employee->dept_id = $request->dept_id;
                $employee->designation_id = $request->designation_id;
                $employee->save();

                if ($employee) {
                    DB::commit();
                    toastr()->success('Employee created successfully');
                    return back();
                }
            }
        } catch (\Exception $e) {
            DB::rollback();
            toastr()->error('Something went wrong');
            return back();
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            DB::beginTransaction();
            $employee = Employee::where('id', $id)->first();
            $user = User::where('id', $employee->user_id)->first();
            $user->name = $request->name;
            $employee->email = $request->email;
            $user->phone = $request->phone;
            $user->dept_id = $request->dept_id;
            $user->role_id = $request->role_id;
            $user->save();

            if ($user) {
                $employee->name = $request->name;
                $employee->phone = $request->phone;
                $employee->email = $request->email;
                $employee->dept_id = $request->dept_id;
                $employee->designation_id = $request->designation_id;
                $employee->save();

                if ($employee) {
                    DB::commit();
                    toastr()->success('Employee updated successfully');
                    return back();
                }
            }
        } catch (\Exception $e) {
            DB::rollback();
            toastr()->error('Something went wrong');
            return back();
        }
    }

    public function destroy(string $id)
    {
        $employee = Employee::where('id', $id)->first();
        $user = User::where('id', $employee->user_id)->first();
        $user->delete();
        $employee->delete();
        toastr()->success('Employee deleted successfully');
        return back();
    }
}