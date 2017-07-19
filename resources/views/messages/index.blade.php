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
								<li><a href="#"> <i class="fa fa-inbox "></i> All Messages <span class="label label-primary pull-right">{{ $count }}</span> </a></li>
								<li><a href="#"> <i class="fa fa-question-circle"></i> Enquiries</a></li>
								<li><a href="#"> <i class="fa fa-cubes"></i> Product Enquiry</a></li>
								<li><a href="#"> <i class="fa fa-archive"></i> Old Messages</a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-9 animated fadeInRight">
				<div class="mail-box-header">
					<form method="get" action="index.html" class="pull-right mail-search">
						<div class="input-group">
							<input type="text" class="form-control input-sm" name="search" placeholder="//TODO">
							<div class="input-group-btn">
								<button type="submit" class="btn btn-sm btn-primary">
									Search
								</button>
							</div>
						</div>
					</form>
					<h2>
						All Messages
					</h2>
					<div class="mail-tools tooltip-demo m-t-md">
						{{-- <div class="btn-group pull-right">
							<a href="{{ $messages->previousPageUrl() }}" class="btn btn-white btn-sm"><i class="fa fa-arrow-left"></i></a>
							<a href="{{ $messages->nextPageUrl() }}" class="btn btn-white btn-sm"><i class="fa fa-arrow-right"></i></a>
						</div> --}}
						{{-- <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="Refresh inbox"><i class="fa fa-refresh"></i> Refresh</button>
						<button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as read"><i class="fa fa-eye"></i> </button>
						<button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as important"><i class="fa fa-exclamation"></i> </button>
						<button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button> --}}
						{{ $messages->links() }}
						<p>Showing {{ $messages->firstItem() }} - {{ $messages->lastItem() }} of {{ $messages->total() }} total</p>
					</div>
				</div>
				<div class="mail-box">


				<table class="table table-hover table-mail">
					<tbody>
						@foreach ($messages as $m)
							<tr class="{{ ($m->read ? 'read' : 'unread') }}">
								<td class="check-mail">
									<div class="icheckbox_square-green"><input type="checkbox" class="i-checks"><ins class="iCheck-helper"></ins></div>
								</td>
								<td class="mail-contact"><a href="messages/{{ $m->id }}">{{ $m->name }}</a></td>
								<td class="mail-subject"><a href="messages/{{ $m->id }}">{{ $m->message }}</a></td>
								<td class=""></td>
								<td class="text-right mail-date">{{ date_format($m->created_at, 'j F y @ H:i:s') }}</td>
							</tr>
						@endforeach

				{{-- <tr class="unread">
						<tr class="unread">
							<td class="check-mail">
								<div class="icheckbox_square-green"><input type="checkbox" class="i-checks"><ins class="iCheck-helper"></ins></div>
							</td>
							<td class="mail-ontact"><a href="mail_detail.html">Anna Smith</a></td>
							<td class="mail-subject"><a href="mail_detail.html">Lorem ipsum dolor noretek imit set.</a></td>
							<td class=""><i class="fa fa-paperclip"></i></td>
							<td class="text-right mail-date">6.10 AM</td>
						</tr>
					<td class="check-mail">
						<div class="icheckbox_square-green checked"><input type="checkbox" class="i-checks" checked=""><ins class="iCheck-helper"></ins></div>
					</td>
					<td class="mail-ontact"><a href="mail_detail.html">Jack Nowak</a></td>
					<td class="mail-subject"><a href="mail_detail.html">Aldus PageMaker including versions of Lorem Ipsum.</a></td>
					<td class=""></td>
					<td class="text-right mail-date">8.22 PM</td>
				</tr>
				<tr class="read">
					<td class="check-mail">
						<div class="icheckbox_square-green"><input type="checkbox" class="i-checks"><ins class="iCheck-helper"></ins></div>
					</td>
					<td class="mail-ontact"><a href="mail_detail.html">Facebook</a> <span class="label label-warning pull-right">Clients</span> </td>
					<td class="mail-subject"><a href="mail_detail.html">Many desktop publishing packages and web page editors.</a></td>
					<td class=""></td>
					<td class="text-right mail-date">Jan 16</td>
				</tr>
				<tr class="read">
					<td class="check-mail">
						<div class="icheckbox_square-green"><input type="checkbox" class="i-checks"><ins class="iCheck-helper"></ins></div>
					</td>
					<td class="mail-ontact"><a href="mail_detail.html">Mailchip</a></td>
					<td class="mail-subject"><a href="mail_detail.html">There are many variations of passages of Lorem Ipsum.</a></td>
					<td class=""></td>
					<td class="text-right mail-date">Mar 22</td>
				</tr>
				<tr class="read">
					<td class="check-mail">
						<div class="icheckbox_square-green"><input type="checkbox" class="i-checks"><ins class="iCheck-helper"></ins></div>
					</td>
					<td class="mail-ontact"><a href="mail_detail.html">Alex T.</a> <span class="label label-danger pull-right">Documents</span></td>
					<td class="mail-subject"><a href="mail_detail.html">Lorem ipsum dolor noretek imit set.</a></td>
					<td class=""><i class="fa fa-paperclip"></i></td>
					<td class="text-right mail-date">December 22</td>
				</tr>
				<tr class="read">
					<td class="check-mail">
						<div class="icheckbox_square-green"><input type="checkbox" class="i-checks"><ins class="iCheck-helper"></ins></div>
					</td>
					<td class="mail-ontact"><a href="mail_detail.html">Monica Ryther</a></td>
					<td class="mail-subject"><a href="mail_detail.html">The standard chunk of Lorem Ipsum used.</a></td>
					<td class=""></td>
					<td class="text-right mail-date">Jun 12</td>
				</tr>
				<tr class="read">
					<td class="check-mail">
						<div class="icheckbox_square-green"><input type="checkbox" class="i-checks"><ins class="iCheck-helper"></ins></div>
					</td>
					<td class="mail-ontact"><a href="mail_detail.html">Sandra Derick</a></td>
					<td class="mail-subject"><a href="mail_detail.html">Contrary to popular belief.</a></td>
					<td class=""></td>
					<td class="text-right mail-date">May 28</td>
				</tr>
				<tr class="read">
					<td class="check-mail">
						<div class="icheckbox_square-green"><input type="checkbox" class="i-checks"><ins class="iCheck-helper"></ins></div>
					</td>
					<td class="mail-ontact"><a href="mail_detail.html">Patrick Pertners</a> <span class="label label-info pull-right">Adv</span></td>
					<td class="mail-subject"><a href="mail_detail.html">If you are going to use a passage of Lorem </a></td>
					<td class=""></td>
					<td class="text-right mail-date">May 28</td>
				</tr>
				<tr class="read">
					<td class="check-mail">
						<div class="icheckbox_square-green"><input type="checkbox" class="i-checks"><ins class="iCheck-helper"></ins></div>
					</td>
					<td class="mail-ontact"><a href="mail_detail.html">Michael Fox</a></td>
					<td class="mail-subject"><a href="mail_detail.html">Humour, or non-characteristic words etc.</a></td>
					<td class=""></td>
					<td class="text-right mail-date">Dec 9</td>
				</tr>
				<tr class="read">
					<td class="check-mail">
						<div class="icheckbox_square-green"><input type="checkbox" class="i-checks"><ins class="iCheck-helper"></ins></div>
					</td>
					<td class="mail-ontact"><a href="mail_detail.html">Damien Ritz</a></td>
					<td class="mail-subject"><a href="mail_detail.html">Oor Lorem Ipsum is that it has a more-or-less normal.</a></td>
					<td class=""></td>
					<td class="text-right mail-date">Jun 11</td>
				</tr>
				<tr class="read">
					<td class="check-mail">
						<div class="icheckbox_square-green"><input type="checkbox" class="i-checks"><ins class="iCheck-helper"></ins></div>
					</td>
					<td class="mail-ontact"><a href="mail_detail.html">Anna Smith</a></td>
					<td class="mail-subject"><a href="mail_detail.html">Lorem ipsum dolor noretek imit set.</a></td>
					<td class=""><i class="fa fa-paperclip"></i></td>
					<td class="text-right mail-date">6.10 AM</td>
				</tr>
				<tr class="read">
					<td class="check-mail">
						<div class="icheckbox_square-green"><input type="checkbox" class="i-checks"><ins class="iCheck-helper"></ins></div>
					</td>
					<td class="mail-ontact"><a href="mail_detail.html">Jack Nowak</a></td>
					<td class="mail-subject"><a href="mail_detail.html">Aldus PageMaker including versions of Lorem Ipsum.</a></td>
					<td class=""></td>
					<td class="text-right mail-date">8.22 PM</td>
				</tr>
				<tr class="read">
					<td class="check-mail">
						<div class="icheckbox_square-green"><input type="checkbox" class="i-checks"><ins class="iCheck-helper"></ins></div>
					</td>
					<td class="mail-ontact"><a href="mail_detail.html">Mailchip</a></td>
					<td class="mail-subject"><a href="mail_detail.html">There are many variations of passages of Lorem Ipsum.</a></td>
					<td class=""></td>
					<td class="text-right mail-date">Mar 22</td>
				</tr>
				<tr class="read">
					<td class="check-mail">
						<div class="icheckbox_square-green"><input type="checkbox" class="i-checks"><ins class="iCheck-helper"></ins></div>
					</td>
					<td class="mail-ontact"><a href="mail_detail.html">Alex T.</a> <span class="label label-warning pull-right">Clients</span></td>
					<td class="mail-subject"><a href="mail_detail.html">Lorem ipsum dolor noretek imit set.</a></td>
					<td class=""><i class="fa fa-paperclip"></i></td>
					<td class="text-right mail-date">December 22</td>
				</tr>
				<tr class="read">
					<td class="check-mail">
						<div class="icheckbox_square-green"><input type="checkbox" class="i-checks"><ins class="iCheck-helper"></ins></div>
					</td>
					<td class="mail-ontact"><a href="mail_detail.html">Monica Ryther</a></td>
					<td class="mail-subject"><a href="mail_detail.html">The standard chunk of Lorem Ipsum used.</a></td>
					<td class=""></td>
					<td class="text-right mail-date">Jun 12</td>
				</tr>
				<tr class="read">
					<td class="check-mail">
						<div class="icheckbox_square-green"><input type="checkbox" class="i-checks"><ins class="iCheck-helper"></ins></div>
					</td>
					<td class="mail-ontact"><a href="mail_detail.html">Sandra Derick</a></td>
					<td class="mail-subject"><a href="mail_detail.html">Contrary to popular belief.</a></td>
					<td class=""></td>
					<td class="text-right mail-date">May 28</td>
				</tr>
				<tr class="read">
					<td class="check-mail">
						<div class="icheckbox_square-green"><input type="checkbox" class="i-checks"><ins class="iCheck-helper"></ins></div>
					</td>
					<td class="mail-ontact"><a href="mail_detail.html">Patrick Pertners</a> </td>
					<td class="mail-subject"><a href="mail_detail.html">If you are going to use a passage of Lorem </a></td>
					<td class=""></td>
					<td class="text-right mail-date">May 28</td>
				</tr>
				<tr class="read">
					<td class="check-mail">
						<div class="icheckbox_square-green"><input type="checkbox" class="i-checks"><ins class="iCheck-helper"></ins></div>
					</td>
					<td class="mail-ontact"><a href="mail_detail.html">Michael Fox</a></td>
					<td class="mail-subject"><a href="mail_detail.html">Humour, or non-characteristic words etc.</a></td>
					<td class=""></td>
					<td class="text-right mail-date">Dec 9</td>
				</tr>
				<tr class="read">
					<td class="check-mail">
						<div class="icheckbox_square-green"><input type="checkbox" class="i-checks"><ins class="iCheck-helper"></ins></div>
					</td>
					<td class="mail-ontact"><a href="mail_detail.html">Damien Ritz</a></td>
					<td class="mail-subject"><a href="mail_detail.html">Oor Lorem Ipsum is that it has a more-or-less normal.</a></td>
					<td class=""></td>
					<td class="text-right mail-date">Jun 11</td>
				</tr> --}}

						</tbody>
					</table>
				</div>
			</div>
		</div>
		</div>
@endsection
