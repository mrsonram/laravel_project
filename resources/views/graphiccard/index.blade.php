<h1>Graphic Card</h1>
<div>
	<a href="{{ url('/') }}/graphiccard/create"> Add Graphic Card</a>
</div>
<table border=1>
<tr>
		<th>No.</th>
		<th>Name</th>
		<th>Details</th>
		<th>Price</th>
	</tr>
	@foreach($table_graphiccard as $row)
	<tr>
		<td>{{ $row->graphiccard_id }} </td>
		<td>{{ $row->name }} </td>
		<td>{{ $row->details }}</td>
		<td>{{ $row->price }}</td>
		<td>
			<a href="{{ url('/') }}/graphiccard/{{ $row->graphiccard_id }}">View</a>
			<a href="{{ url('/') }}/graphiccard/{{ $row->graphiccard_id }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>