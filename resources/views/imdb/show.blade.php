@forelse($table_imdb as $row)
	<h1>IMDB : {{ $row->imdb_id }} </h1>
	<div>
		<strong>Title : </strong>
		<span>{{ $row->heading }} </span>
	</div>
	<div>
		<strong>Cast : </strong>
		<span>{{ $row->cast }}</span>
	</div>
	<div>
		<strong>Storyline : </strong>
		<span>{{ $row->storyline }}</span>
	</div>
	<div>
		<strong>Detail : </strong>
		<span>{{ $row->detail }}</span>
	</div>
    <div>
		<strong>Box Office : </strong>
		<span>{{ $row->box_office }}</span>
	</div>
    <div>
		<strong>Company Credits : </strong>
		<span>{{ $row->company_credits }}</span>
	</div>
    <div>
		<strong>Rate This : </strong>
		<span>{{ $row->users_review }}</span>
	</div>
	<div><a href="{{ url('/') }}/imdb">Back</a></div>
@empty
	<div>This IMDB "id" does not exist</div>
@endforelse