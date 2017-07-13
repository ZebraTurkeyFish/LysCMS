@extends('layouts.app')

@section('title', 'Main page')

@section('content')
	<div class="row wrapper border-bottom white-bg page-heading">
		<div class="col-lg-12">
			<h2><i class="fa fa-th"></i> Category - {{ $category->category }}</h2>
			<ol class="breadcrumb">
				<li>
					<a href="{{ url('category') }}">Categories</a>
				</li>
				<li class="active">
					<strong>Manage Category</strong>
				</li>
			</ol>
		</div>
	</div>
	<div class="row wrapper wrapper-content">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Full Product List <small class="m-l-sm">Click to manage.</small></h5>
					<div class="pull-right">
						<button class="btn btn-xs btn-primary pull-right" data-target="#addProductModal" data-toggle="modal"><i class="fa fa-plus"></i> &nbsp; Add Product</button>
						<div class="modal inmodal" id="addProductModal" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<i class="fa fa-cubes modal-icon"></i> <i class="fa fa-plus modal-icon"></i>
										<h4 class="modal-title">Add a new product</h4>
									</div>
									<div class="modal-body">
										{{ Form::open(array('method' => 'post', 'url' => url('product'))) }}
										{{ CSRF_field() }}
										<div class="form-group">
											<label for="product">Product Name</label>
											<input type="text" class="form-control" name="product">
										</div>
										<div class="form-group">
											<label for="product">Price</label>
											<div class="input-group m-b">
												<span class="input-group-addon">£</span> 
												<input type="number" step=0.01 min="0" class="form-control" placeholder="0.00" name="price"> 
											</div>
										</div>
										<div class="form-group">
											<input type="hidden" name="category" value="{{ $category->id }}">
											<input type="submit" class="btn btn-primary">
										</div>
										{{ Form::close() }}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ibox-content no-padding">
					<table class="table table-striped table-hover">
						<thead>
							<th>ID</th>
							<th>Product</th>
							<th>Price</th>
							<th>Description</th>
							<th>Category</th>
						</thead>
						<tbody>
							@if (count($products) > 0)
								@foreach ($products as $p)
									<tr class="clickable" data-id="{{ $p->id }}">
										<td>{{ $p->id }}</td>
										<td>{{ $p->product }}</td>
										<td>{{ $p->price }}</td>
										<td>{{ ($p->description ? $p->description : 'Not set') }}</td>
										<td>{{ $p->category->category }}</td>
									</tr>
								@endforeach
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(function(){
			$('tr.clickable').click(function(){
				location.href = "{{ url('product') }}" + "/" + $(this).data('id');
			});
		});
	</script>
@endsection
