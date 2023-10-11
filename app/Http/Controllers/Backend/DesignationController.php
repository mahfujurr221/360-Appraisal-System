<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index()
    {
        $designations = Designation::select('id', 'name')->get();
        return view('backend.pages.designation.index', compact('designations'));
    }

    public function store(Request $request)
    {
        Designation::create($request->all());
        toastr()->success('Designation created successfully');
        return back();

    }

    public function update(Request $request, string $id)
    {
        $designation = Designation::find($id);
        $designation->update($request->all());
        toastr()->success('Designation updated successfully');
        return back();
    }

    public function destroy(string $id)
    {
        $designation = Designation::find($id);
        $designation->delete();
        toastr()->success('Designation deleted successfully');
        return back();
    }
}