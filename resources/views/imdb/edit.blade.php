@forelse($table_imdb as $row)
<h1>Edit Movie : {{ $row->imdb_id }}</h1>
	<form action="{{ url('/') }}/imdb/{{ $row->imdb_id }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
    	<div>
    		<strong>Title : </strong>
    		<input type="text" name="heading" value="{{ $row->heading }}" placeholder="heading here..." >
    	</div>
    	<div>
    		<strong>Cast : </strong>
    		<input type="text" name="cast" value="{{ $row->cast }}" placeholder="cast here..." >
    	</div>
    	<div>
    		<strong>Storyline : </strong>
    		<input type="text" name="storyline" value="{{ $row->storyline }}" placeholder="storyline here..." >
    	</div>
        <div>
    		<strong>Detail : </strong>
    		<input type="text" name="detail" value="{{ $row->detail }}" placeholder="detail here..." >
    	</div>
        <div>
    		<strong>Box Office : </strong>
    		<input type="text" name="box_office" value="{{ $row->box_office }}" placeholder="box_office here..." >
    	</div>
        <div>
    		<strong>Company Credits : </strong>
    		<input type="text" name="company_credits" value="{{ $row->company_credits }}" placeholder="company_credits here..." >
    	</div>
        <div>
    		<strong>Rate : </strong>
    		<input type="text" name="users_review" value="{{ $row->users_review }}" placeholder="users_review here..." >
    	</div>
    	<div>
			<a href="{{ url('/') }}/imdb">Back</a>
			<button type="submit">Update</button>
		</div>
	</form>
@empty
	<h1>This IMDB id does not exist</h1>
@endforelse