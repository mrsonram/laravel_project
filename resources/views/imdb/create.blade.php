<h1>Create New Movie</h1>
<form action="{{ url('/') }}/imdb" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}
	<div>
		<strong>Title : </strong>
		<input type="text" name="heading" placeholder="heading here..." >
	</div>
	<div>
		<strong>Cast : </strong>
		<input type="text" name="cast" placeholder="cast here..." >
	</div>
	<div>
		<strong>Storyline : </strong>
		<input type="text" name="storyline" placeholder="storyline here..." >
	</div>
	<div>
		<strong>Details : </strong>
		<input type="text" name="details" name="details" placeholder="details here..." >
	</div>
	<div>
		<strong>Box Office : </strong>
		<input type="text" name="box_office" name="box_office" placeholder="box_office here..." >
	</div>
    <div>
		<strong>Company Credits : </strong>
		<input type="text" name="company_credits" name="company_credits" placeholder="company_credits here..." >
	</div>
    <div>
		<strong>Rate This : </strong>
		<input type="text" name="user_reviews" name="user_reviews" placeholder="user_reviews here..." >
	</div>
	<div>
		<a href="{{ url('/') }}/imdb">Back</a>
		<button type="submit">Create</button>
	</div>
</form>