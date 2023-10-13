<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Roles;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Roles::get();
        return view('backend.pages.role.index', compact('roles'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|unique:roles',
        ]);
        Roles::create($request->all());
        toastr()->success('Role created successfully');
        return back();
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|unique:roles,name,' . $id,
        ]);
        $role = Roles::find($id);
        $role->update($request->all());
        toastr()->success('Role updated successfully');
        return back();
    }
    public function destroy(string $id)
    {
        $role = Roles::find($id);
        $role->delete();
        toastr()->success('Role deleted successfully');
        return back();
    }
}