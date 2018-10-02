<h1>Student List</h1>
<div>
	<a href="{{ url('/') }}/student/create"> New Student</a>
</div>
<table border=1>
<tr>
		<th>student_id</th>
		<th>name</th>
		<th>hours_per_week</th>
		<th>grade</th>
	</tr>
	@foreach($table_student as $row)
	<tr>
		<td>{{ $row->student_id }} </td>
		<td>{{ $row->name }} </td>
		<td>{{ $row->hours_per_week }}</td>
		<td>{{ $row->grade }}</td>
		<td>
			<a href="{{ url('/') }}/student/{{ $row->student_id }}">View</a>
			<a href="{{ url('/') }}/student/{{ $row->student_id }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>