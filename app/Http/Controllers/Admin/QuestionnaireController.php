<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Questionnaire;

class QuestionnaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('admin.questionnaire.create');
    }

    public function store(Request $request)
    {
         $this->validate($request, [
            'title' => 'required',
        ]);

         //Create Questionnaire
         $questionnaire = new Questionnaire;

         $questionnaire->title = $request->input('title');
         $questionnaire->user_id = auth()->user()->id;
         $questionnaire->save();

        return redirect('admin/questionnaires/'.$questionnaire->id);

    }

    public function show(\App\Questionnaire $questionnaire)
    {
        return view('questionnaire.show', compact('questionnaire'));
    }
}
