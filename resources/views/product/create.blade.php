<h1>Create New Product</h1>
<form action="{{ url('/') }}/product" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}
	<div>
		<strong>Product Code : </strong>
		<input type="text" name="product_code" placeholder="product_code here..." >
	</div>
	<div>
		<strong>Product Name : </strong>
		<input type="text" name="product_name" placeholder="product_name here..." >
	</div>
	<div>
		<strong>Product Unit : </strong>
		<input type="text" name="product_unit" placeholder="product_unit here..." >
	</div>
	<div>
		<strong>Normal Price : </strong>
		<input type="number" step="any" name="normal_price" placeholder="normal_price here..." >
	</div>
	<div>
		<a href="{{ url('/') }}/product">Back</a>
		<button type="submit">Create</button>
	</div>
</form>
