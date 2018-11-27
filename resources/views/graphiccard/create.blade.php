<h1>Create New Graphic Card</h1>
<form action = "{{ url('/') }}/graphiccard" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}
	<div>
		<strong>Name : </strong>
		<input type = "text" name="name" placeholder="name here..." >
	</div>
	<div>
		<strong>Details : </strong>
		<input type = "text" name="details" placeholder="details here..." >
	</div>
	<div>
		<strong>Price : </strong>
		<input type = "number" name="price" placeholder="price here..." >
	</div>
	<div>
		<a href = "{{ url('/') }}/graphiccard">back</a>
		<button type = "submit">Create</button>
	</div>
</form>