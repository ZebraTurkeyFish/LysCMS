@extends('layouts.app')

@section('title', 'Main page')

@section('content')
	<div class="row wrapper border-bottom white-bg page-heading">
		<div class="col-lg-12">
			<h2><i class="fa fa-th"></i> Categories</h2>
			<small>
				The category index page
			</small>
		</div>
	</div>
	<div class="row wrapper wrapper-content">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Full Category List <small class="m-l-sm">Click to see products.</small></h5>
					<div class="pull-right">
						<button class="btn btn-xs btn-primary pull-right" data-target="#addCategoryModal" data-toggle="modal"><i class="fa fa-plus"></i> &nbsp; Add Category</button>
						<div class="modal inmodal" id="addCategoryModal" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<i class="fa fa-th modal-icon"></i> &nbsp; <i class="fa fa-plus modal-icon"></i>
										<h4 class="modal-title">Add a new category</h4>
									</div>
									<div class="modal-body">
										{{ Form::open(array('method' => 'post')) }}
										{{ CSRF_field() }}
										<div class="form-group">
											<label for="product">Category Name</label>
											<input type="text" class="form-control" name="category">
										</div>
										<div class="form-group">
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
							<th>Category</th>
						</thead>
						<tbody>
							@if (count($categories) > 0)
								@foreach ($categories as $c)
									<tr class="clickable" data-id="{{ $c->id }}">
										<td>{{ $c->id }}</td>
										<td>{{ $c->category }}</td>
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
				location.href = "{{ url('category') }}" + "/" + $(this).data('id');
			});
		});
	</script>
@endsection
