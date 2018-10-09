@forelse($table_product as $row)
<h1>Edit Product : {{ $row->product_id }}</h1>
	<form action="{{ url('/') }}/product/{{ $row->product_id }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
    	<div>
    		<strong>Code : </strong>
    		<input type="text" name="product_code" value="{{ $row->product_code }}" placeholder="product_code here..." >
    	</div>
    	<div>
    		<strong>Name : </strong>
    		<input type="text" name="product_name" value="{{ $row->product_name }}" placeholder="product_name here..." >
    	</div>
    	<div>
    		<strong>Unit : </strong>
    		<input type="text" name="product_unit" value="{{ $row->product_unit }}" placeholder="product_unit here..." >
    	</div>
    	<div>
    		<strong>Price : </strong>
    		<input type="number" step="any" name="normal_price" value="{{ $row->normal_price }}" placeholder="normal_price here..."  >
    	</div>
    	<div>
			<a href="{{ url('/') }}/product">Back</a>
			<button type="submit">Update</button>
		</div>
	</form>
@empty
	<h1>This Product id does not exist</h1>
@endforelse