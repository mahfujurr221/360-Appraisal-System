<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $roles = Roles::get();
        $departments = Department::select('id', 'dept_code')->get();
        // $designations = Designation::select('id', 'name')->get();
        $admins = User::get();
        return view('backend.pages.admin.index', compact('admins', 'roles', 'departments'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $user = new User();
        $user->name = $request->name;
        $user->dept_id = $request->dept_id;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->dept_id = $request->dept_id;
        $user->address = $request->address;
        $user->password = bcrypt($request->password);
        $user->save();
        //if has file 
        if ($user) {
            toastr()->success('Admin created successfully');
            return back();
        } else {
            toastr()->error('Admin created failed');
            return back();
        }
    }

    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $admin = User::find($id);
        $admin->name = $request->name;
        $admin->dept_id = $request->dept_id;
        $admin->phone = $request->phone;
        $admin->email = $request->email;
        $admin->role_id = $request->role_id;
        $admin->dept_id = $request->dept_id;
        $admin->address = $request->address;
        $admin->save();

        if ($admin) {
            toastr()->success('Admin updated successfully');
            return back();
        } else {
            toastr()->error('Admin updated failed');
            return back();
        }
    }

    public function destroy(string $id)
    {
        $admin = User::find($id);
        $admin->delete();
        toastr()->success('Admin deleted successfully');
        return back();
    }

    //profile
    public function profile()
    {
        $admin = auth()->user();
        return view('backend.pages.admin.profile', compact('admin'));
    }

    //profile update
    public function profileUpdate(Request $request, $id)
    {
        $user = User::find($id);
        $request->validate([
            'name' => 'required|unique:users,name,' . $id,
            'phone' => 'required|unique:users,phone,' . $id,
            'email' => 'required|unique:users,email,' . $id,
            'address' => 'required',
        ]);
        $user->update($request->all());
        toastr()->success('Profile updated successfully');
        return back();
    }

    //profile password update
    public function profilePasswordUpdate(Request $request, $id)
    {
        $user = User::find($id);
        //if current password is correct
        if (password_verify($request->current_password, $user->password)) {
            //if new password and confirm password is same
            if ($request->new_password == $request->confirm_password) {
                $user->update([
                    'password' => bcrypt($request->new_password),
                ]);
                toastr()->success('Password updated successfully');
                return back();
            } else {
                toastr()->error('New password and confirm password not matched');
                return back();
            }
        } else {
            toastr()->error('Current password not matched');
            return back();
        }
    }
}