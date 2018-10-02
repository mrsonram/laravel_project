@forelse($table_student as $row)
<h1>Edit Student : {{ $row->student_id }}</h1>
	<form action="{{ url('/') }}/student/{{ $row->student_id }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
    	<div>
    		<strong>Name : </strong>
    		<input type="text" name="name" value="{{ $row->name }}" placeholder="name here..." >
    	</div>
    	<div>
    		<strong>Hours Per Week : </strong>
    		<input type="number" name="hours_per_week" value="{{ $row->hours_per_week }}" placeholder="hours_per_week here..." >
    	</div>
    	<div>
    		<strong>Grade : </strong>
    		<input type="text" name="grade" value="{{ $row->grade }}" placeholder="grade here..." >
    	</div>
    	<div>
			<a href="{{ url('/') }}/student">Back</a>
			<button type="submit">Update</button>
		</div>
	</form>
@empty
	<h1>This Student id does not exist</h1>
@endforelse