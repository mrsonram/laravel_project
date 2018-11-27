<h1>IMDB</h1>
<div>
	<a href="{{ url('/') }}/imdb/create">Add Movie</a>
</div>
<table border=1>
<tr>
		<th>No.</th>
		<th>Title</th>
		<th>Cast</th>
		<th>Storyline</th>
		<th>Detail</th>
		<th>Box Office</th>
		<th>Company Credits</th>
        <th>Rate This</th>
	</tr>
	@foreach($table_imdb as $row)
	<tr>
		<td>{{ $row->imdb_id }} </td>
		<td>{{ $row->heading }} </td>
		<td>{{ $row->cast }}</td>
		<td>{{ $row->storyline }}</td>
		<td>{{ $row->detail }}</td>
        <td>{{ $row->box_office }}</td>
		<td>{{ $row->company_credits }}</td>
        <td>{{ $row->users_review }}</td>
		
		<td>
			<a href="{{ url('/') }}/imdb/{{ $row->imdb_id }}">View</a>
			<a href="{{ url('/') }}/imdb/{{ $row->imdb_id }}/edit">Edit</a>
			<a href="javascript:void(0)" onclick="onDelete( {{ $row->imdb_id }} )">Delete</a>
		</td>
	</tr>
	@endforeach
</table>
<div style="display:none;">
	<form action="#" method="POST" id="form_delete" >
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button type="submit">Delete</button>
	</form>
	<script>
	function onDelete(id){
		//--THIS FUNCTION IS USED FOR SUBMIT FORM BY script--//

		//GET FORM BY ID
		var form = document.getElementById("form_delete");

		//CHANGE ACTION TO SPECIFY ID
		form.action = "{{ url('/') }}/imdb/"+id;

		//SUBMIT
		var want_to_delete = confirm('Are you sure to delete this IMDB?');
		if(want_to_delete){
			form.submit();
		}
	}
	</script>
</div>
