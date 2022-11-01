@extends('layouts.admin')

@section('content')
<div class="card">
	<div class="card-header">
		<h4>Add Product</h4>
	</div>
	<div class="card-body">
		<form action="{{ url('update-product', $products->id) }}" method="POST" enctype="multipart/form-data">
			@method("PUT")
			@csrf
			<div class="row">
				<div class="col-md-12 mb-3">
					<select class="form-select">
						<option value="">{{$products->category->name ?? 'none' }}</option>
					</select>
				</div>
				<div class="col-md-6 mb-3">
					<label for="">Name</label>
					<input type="text" value="{{ $products->name }}" class="form-control" name="name">
				</div>
				<div class="col-md-6 mb-3">
					<label for="">Slug</label>
					<input type="text" value="{{ $products->slug }}" class="form-control" name="slug">
				</div>
				<div class="col-md-12 mb-3">
					<label for="">Small Description</label>
					<textarea name="small_description" rows="3" class="form-control">{{ $products->small_description }}</textarea>
				</div>
				<div class="col-md-12 mb-3">
					<label for="">Description</label>
					<textarea name="description" rows="3" class="form-control">{{ $products->description }}</textarea>
				</div>
				<div class="col-md-12 mb-3">
					<label for="">Original Price</label>
					<input type="number" class="form-control" name="original_price" value="{{ $products->original_price }}">
				</div>
				<div class="col-md-12 mb-3">
					<label for="">Selling Price</label>
					<input type="number" class="form-control" name="selling_price" value="{{ $products->selling_price }}">
				</div>
				<div class="col-md-6 mb-3">
					<label for="">Tax</label>
					<input type="number" class="form-control" name="tax" value="{{ $products->tax }}">
				</div>
				<div class="col-md-6 mb-3">
					<label for="">Quantity</label>
					<input type="number" class="form-control" name="qty" value="{{ $products->qty }}">
				</div>
				<div class="col-md-6 mb-3">
					<label for="">Status</label>
					<input type="checkbox" name="status" {{ $products->status == "1" ? 'checked':'' }}>
				</div>
				<div class="col-md-6 mb-3">
					<label for="">Trending</label>
					<input type="checkbox" name="trending" {{ $products->trending == "1" ? 'checked':'' }}>
				</div>
				<div class="col-md-12 mb-3">
					<label>Meta Keywords</label>
					<textarea name="meta_keywords" rows="3" class="form-control">{{ $products->meta_keywords }}</textarea>
				</div>
				<div class="col-md-12 mb-3">
					<label for="">Meta Description</label>
					<textarea name="meta_description" row="3" class="form-control">{{ $products->meta_description }}</textarea>
				</div>
				@if($products->image)
					<img src="{{ asset('assets/uploads/products' . $products->image)}}" alt="">
				@endif
				<div class="col-md-12">
					<input type="file" name="image" value="{{ $products->image }}" class="form-control">
				</div>
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection