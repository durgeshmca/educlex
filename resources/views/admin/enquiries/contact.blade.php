@extends('layouts.admin')
@section('content')
@include('admin.inc.messages')
<div class="page-content-wrapper">
<div class="page-content" style="min-height:1160px">

			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Contact Us  <small>Enquies</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="/dashboard">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Enquiries</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="/enquires/view/individual">Contact Us</a>
					</li>
				</ul>

			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
{{$contacts->links()}}
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs"></i>Contact Us Enquiries
							</div>
							<div class="tools">
								<a href="/contact/export"  class="" data-original-title="" title="Export to excel">
									<i class="fa fa-file-excel-o" style="font-size:36px;color:green"></i>
								</a>
							</div>
						</div>

						<div class="portlet-body flip-scroll">
							<table class="table table-bordered table-striped table-condensed flip-content">
							<thead class="flip-content">
							<tr>
								<th width="10%">
									 Name
								</th>
								<th>
									 Email
								</th>
								<th>
									 Contact No
								</th>
								<th >
									 Subject
								</th>

								<th>
									 Message
								</th>

								<th>
									 Date & Time
								</th>
							</tr>
							</thead>
							<tbody>
							@foreach($contacts as $workshop)
							<tr>
								<td>
									<a href="/enquiries/view/contact/{{$workshop->id}}"> {{$workshop->name}}</a>
								</td>
								<td>
									{{$workshop->email}}
								</td>
								<td>
									{{$workshop->phone}}
								</td>
								<td>
									 {{$workshop->subject}}
								</td>

								<td>
									{{substr($workshop->message,0,100).'...'}}
								</td>

								<td>
									 {{date('d M y h:i:s A',strtotime($workshop->created_at))}}
								</td>
							</tr>
							@endforeach

							</tbody>
							</table>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
<div class="pull-right">
 {{$contacts->links()}}
</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
</div>
@endsection
