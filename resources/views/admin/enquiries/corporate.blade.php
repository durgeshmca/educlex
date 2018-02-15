@extends('layouts.admin')
@section('content')
@include('admin.inc.messages')
<div class="page-content-wrapper">
<div class="page-content" style="min-height:1160px">

			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Corporate Workshop  <small>Enquies</small>
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
						<a href="/enquires/view/individual">Corporte</a>
					</li>
				</ul>

			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
{{$corporates->links()}}
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs"></i>Corporate Work Shop Enquiries
							</div>
							<div class="tools">
								<a href="/export/corporate"  class="" data-original-title="" title="Export to excel">
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

                <th>
									Company
								</th>
								<th >
									 Address
								</th>
								<th>
									 Candidates
								</th>
								<th>
									 Interests
								</th>
              	<th>
									 Date & Time
								</th>
							</tr>
							</thead>
							<tbody>
							@foreach($corporates as $workshop)
							<tr>
								<td>
									<a href="/enquiries/view/corporate/{{$workshop->id}}"> {{$workshop->fname}}&nbsp;{{$workshop->lname}}</a>
								</td>
								<td>
									{{$workshop->email}}
								</td>
								<td>
									{{$workshop->contact}}
								</td>

                <td >
									 {{$workshop->company}}
								</td>
								<td>
									 {{$workshop->addres}}&nbsp;{{$workshop->landmark}}&nbsp;{{$workshop->city}}&nbsp;{{$workshop->state}}
								</td>
								<td>
									{{$workshop->total_candidates}}
								</td>
								<td>
									{{$workshop->interests}}
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
 {{$corporates->links()}}
</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
</div>
@endsection
