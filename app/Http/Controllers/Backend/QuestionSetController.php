<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\QuestionSet;
use Illuminate\Http\Request;

class QuestionSetController extends Controller
{
    public function index()
    {
        $questionSets = QuestionSet::with('surveyQuestion')->get();
        return view('backend.pages.question-set.index', compact('questionSets'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $questionSet = new QuestionSet();
        $questionSet->name = $request->name;
        $questionSet->description = $request->description;
        $questionSet->save();
        toastr()->success('Question Set Created Successfully');
        return redirect('question-set');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $questionSet = QuestionSet::find($id);
        $questionSet->name = $request->name;
        $questionSet->description = $request->description;
        $questionSet->save();
        toastr()->success('Question Set Updated Successfully');
        return redirect('question-set');
    }

    public function destroy(string $id)
    {
        $questionSet = QuestionSet::find($id);
        $questionSet->delete();
        toastr()->success('Question Set Deleted Successfully');
        return redirect('question-set');
    }
}
