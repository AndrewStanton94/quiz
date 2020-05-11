<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Quiz;

class QuizController extends Controller
{
	function show(){
		$quizzes = Quiz::all();

		return view('quiz', [
			'quizzes' => $quizzes
		]);
	}

	function create(Request $request){
		$quiz = new Quiz();
		$quiz->quizName = $request->quizName;
		$quiz->when = $request->when;
		$quiz->questionMaster = $request->questionMaster;
		$quiz->save();

		return redirect('/quizzes');
	}
}
