<h1>Create New Student</h1>
<form action="{{ url('/') }}/student" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}
	<div>
		<strong>Name : </strong>
		<input type="text" name="name" placeholder="name here..." >
	</div>
	<div>
		<strong>Hours Per Week : </strong>
		<input type="number" name="hours_per_week" placeholder="hours_per_week here..." >
	</div>
	<div>
		<strong>Grade : </strong>
		<input type="text" name="grade" placeholder="grade here..." >
	</div>
	<div>
		<a href="{{ url('/') }}/student">Back</a>
		<button type="submit">Create</button>
	</div>
</form>