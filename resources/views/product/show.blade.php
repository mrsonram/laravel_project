@forelse($table_product as $row)
	<h1>Product : {{ $row->product_id }} </h1>
	<div>
		<strong>Code : </strong>
		<span>{{ $row->product_code }} </span>
	</div>
	<div>
		<strong>Name : </strong>
		<span>{{ $row->product_name }}</span>
	</div>
	<div>
		<strong>Unit : </strong>
		<span>{{ $row->product_unit }}</span>
	</div>
	<div>
		<strong>Price : </strong>
		<span>{{ $row->normal_price }}</span>
	</div>
	<div><a href="{{ url('/') }}/product">Back to Product</a></div>
@empty
	<div>This Product "id" does not exist</div>
@endforelse