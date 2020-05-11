@extends('master')

@section('title', 'Quizes')

@section('content')

<h1>Quizes</h1>

<form action="./quizzes" method="post">
	<label>Quiz name
	<input name="quizName" required>
	</label>

	<label>Quiz time
	<input type="date" name="when" required>
	</label>

	<label>Question master
	<select name="questionMaster">
		<option value="0">Test</option>
	</select>
	</label>
	{{ csrf_field() }} 

	<button type="submit">Submit</button>
</form>

<ul>
	@foreach($quizzes as $quiz)
	<li>{{ $quiz->quizName }}</li>
	@endforeach
</ul>

@endsection
