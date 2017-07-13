@extends('layouts.app')

@section('title', 'Main page')

@section('content')
	<div class="row wrapper border-bottom white-bg page-heading">
		<div class="col-lg-12">
			<h2><i class="fa fa-cog"></i> Manage Product</h2>
			<ol class="breadcrumb">
				<li>
					<a href="{{ url('product') }}">Products</a>
				</li>
				<li class="active">
					<strong>Manage Product</strong>
				</li>
			</ol>
		</div>
	</div>
	<div class="row wrapper wrapper-content">
		<div class="col-lg-12">
			<div class="tabs-container">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> Product info</a></li>
					<li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false"> Images</a></li>
				</ul>
				<div class="tab-content">
					<div id="tab-1" class="tab-pane active">
						<div class="panel-body">
							{{ Form::open(array('method' => 'put')) }}
							{{ CSRF_field() }}
							<fieldset class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-2 control-label">Name:</label>
									<div class="col-sm-10">
										<input type="text" name="product" class="form-control" placeholder="Product name" value="{{ $product->product }}">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Price:</label>
									<div class="col-sm-10">
										<div class="input-group m-b">
											<span class="input-group-addon">£</span> 
											<input type="number" step=0.01 min="0" name="price" class="form-control" placeholder="0.00" value="{{ $product->price }}"> 
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Description:</label>
									<div class="col-sm-10">
										<textarea name="description" class="form-control" rows="4">{{ $product->description }}</textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Category:</label>
									<div class="col-sm-10">
										<select name="category" class="form-control">
											<option value="">- No Category -</option>
											@foreach ($categories as $c)
												<option value="{{ $c->id }}" {{ ($product->category_id != $c->id ?: 'selected') }} >{{ $c->category }}</option>
											@endforeach
										</select>
									</div>
								</div>
							<hr>
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-2">
									<input type="submit" class="btn btn-primary" value="Save Changes">
								</div>
							</div>							
							</fieldset>
							{{ Form::close() }}
						</div>
					</div>
					<div id="tab-2" class="tab-pane">
						<div class="panel-body">
							<p>The first image in the sort order is used as the thumbnail for the product</p>
							<div class="table-responsive">
								{{ Form::open(array('method' => 'put', 'url' => url('product/' . $product->id . '/images'))) }}
								{{ CSRF_field() }}
								<table class="table table-bordered table-stripped">
									<thead>
										<tr>
											<th class="col-sm-3">Image</th>
											<th class="col-sm-6">Image url</th>
											<th class="col-sm-2">Sort order</th>
											<th class="col-sm-1">Actions</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($product->images as $i)
											<tr>
												<td>
													<img src="{{url('/images/' . $i->image)}}" width="100%">
												</td>
												<td>
													<input type="text" class="form-control" disabled value="{{url('/images/' . $i->image)}}">
												</td>
												<td>
													<input type="hidden" name="id[]" value="{{ $i->id }}">
													<input type="text" class="form-control" name="sort_order[]" value="{{ $i->sort_order }}">
												</td>
												<td>
													<button class="btn btn-white"><i class="fa fa-trash"></i> </button>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
								<div class="form-group">
									<input type="submit" class="btn btn-primary" value="Save Changes">
								</div>
								{{ Form::close() }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
