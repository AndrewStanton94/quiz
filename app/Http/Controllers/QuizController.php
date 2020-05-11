<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Quiz;

class QuizController extends Controller
{
	function show(){
		$quizzes = Quiz::all();
		//foreach($quizzes as $quiz){
			//echo $quiz->quizName;
		//}die;

		//$users = DB::connection('mysql')->select('SELECT * FROM  `quizzes`');
		//var_dump($users);
		//echo $users;
		//echo implode(', ', $users);
		//echo count($users);
		return view('quiz', [
			'quizzes' => $quizzes
		]);
	}

	function create(Request $request){
		echo 'name ' . $request->quizName;
		echo 'when ' . $request->when;
		echo 'qm ' . $request->questionMaster;

		$quiz = new Quiz();
		$quiz->quizName = $request->quizName;
		$quiz->when = $request->when;
		$quiz->questionMaster = $request->questionMaster;
		$quiz->save();

		return redirect('/quizzes');
	}
}
