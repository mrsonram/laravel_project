@forelse($table_student as $row)
	<h1>Student : {{ $row->student_id }} </h1>
	<div>
		<strong>name : </strong>
		<span>{{ $row->name }} </span>
	</div>
	<div>
		<strong>hours_per_week : </strong>
		<span>{{ $row->hours_per_week }}</span>
	</div>
	<div>
		<strong>grade : </strong>
		<span>{{ $row->grade }}</span>
	</div>
	<div><a href="{{ url('/') }}/student">back to student</a></div>
@empty
	<div>This Student "id" does not exist</div>
@endforelse