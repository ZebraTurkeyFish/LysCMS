@extends('layouts.app')

@section('title', 'Messages')

@section('content')
	<div class="row wrapper border-bottom white-bg page-heading">
		<div class="col-lg-12">
			<h2><i class="fa fa-envelope"></i> Messages</h2>
			<small></small>
		</div>
	</div>
	<div class="wrapper wrapper-content">
		<div class="row">
			<div class="col-lg-3">
				<div class="ibox float-e-margins">
					<div class="ibox-content mailbox-content">
						<div class="file-manager">
							{{-- <a class="btn btn-block btn-primary compose-mail" href="mail_compose.html">Compose Mail</a> --}}
							<div class="space-25"></div>
							<h5>Folders</h5>
							<ul class="folder-list m-b-md no-padding">
								<li><a href="/messages"> <i class="fa fa-inbox "></i> All Messages <span class="label label-primary pull-right">{{ $count }}</span> </a></li>
								<li><a href="#"> <i class="fa fa-question-circle"></i> Enquiries</a></li>
								<li><a href="#"> <i class="fa fa-cubes"></i> Product Enquiry</a></li>
								<li><a href="#"> <i class="fa fa-archive"></i> Old Messages</a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
