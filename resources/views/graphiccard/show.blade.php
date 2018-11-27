@forelse($table_graphiccard as $row)
	<h1>GraphicCard : {{ $row->graphiccard_id }} </h1>
	<div>
		<strong>Name : </strong>
		<span>{{ $row->name }} </span>
	</div>
	<div>
		<strong>Details : </strong>
		<span>{{ $row->details }}</span>
	</div>
	<div>
		<strong>Price : </strong>
		<span>{{ $row->price }}</span>
	</div>
	<div><a href="{{ url('/') }}/graphiccard">Back</a></div>
@empty
	<div>This GraphicCard "id" does not exist</div>
@endforelse