@extends('layouts.admin')
@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <div class="page-content">


    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">
    Corporate Enquiry  <small>View</small>
    </h3>
    <div class="page-bar">
      <ul class="page-breadcrumb">
        <li>
          <i class="fa fa-home"></i>
          <a href="index.html">Home</a>
          <i class="fa fa-angle-right"></i>
        </li>
        <li>
          <a href="#">Enquiries</a>
          <i class="fa fa-angle-right"></i>
        </li>
        <li>
          <a href="#">Corporate</a>
        </li>
      </ul>

    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
      <div class="col-md-12">
        <div class="tabbable-line boxless tabbable-reversed">
          <ul class="nav nav-tabs">
            <li class="active">
              <a href="#tab_0" data-toggle="tab">
            Enquiry</a>
            </li>

          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_0">
              <div class="portlet box green">
                <div class="portlet-title">
                  <div class="caption">
                    <i class="fa fa-gift"></i>View
                  </div>
                  <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                  </div>
                </div>

                <div class="portlet-body form">
                      @if(count($corporates)>0)

                      <?php $images =  $corporates->images;?>
                  <table class="table table-bordered table-striped">
													<thead>
													<tr>
														<th>
															Field
														</th>
														<th>
															 Value
														</th>

														</tr>
													</thead>
													<tbody>
                            <tr>
  														<th>
  															<span class="font-blue">Images</span>
  															</i>
  														</th>
  														<td >
                                <div class="thumbnail col-sm-3" id='responseImage'>

                                </div>
  														</td>
                            </tr>

                          <tr>
														<th>
															<span class="font-blue">Name</span>
															</i>
														</th>
														<td>
                              <span class="font-blue">{{$corporates->fname.' '.$corporates->lname}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Email</span>
														</th>
														<td>
                              <span class="font-blue">{{$corporates->email}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Contact No.</span>
															</i>
														</th>
														<td>
                              <span class="font-blue">{{$corporates->contact}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Designation</span>
															</i>
														</th>
														<td>
                              <span class="font-blue">{{$corporates->designation}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Company</span>
														</th>
														<td>
                              <span class="font-blue">{{$corporates->company}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Address</span>
														</th>
														<td>
                              <span class="font-blue">{{$corporates->addres}}</span>
                              <span class="font-blue">{{$corporates->landmark}}</span>
                              <span class="font-blue">{{$corporates->city}}</span>
                              <span class="font-blue">{{$corporates->state}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Total Candidates</span>
														</th>
														<td>
                              <span class="font-blue">{{$corporates->total_candidates}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Interested In</span>
															</i>
														</th>
														<td>
                              <span class="font-blue">{{$corporates->interests}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Payment Mode</span>
															</i>
														</th>
														<td>
                              <span class="font-blue">{{$corporates->payment_mode}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Enquiry Time</span>
														</th>
														<td>
                              <span class="font-blue">{{date('d M Y h:i:s A',strtotime($corporates->created_at))}}</span>
														</td>
                          </tr>



													</tbody>
													</table>
                          <div class="form-actions">
                            <div class="row">
                              <div class="col-md-offset-3 col-md-9">
                                <form class="" action="/enquiries/corporate/{{$corporates->id}}" method="post">
                                  {{csrf_field()}}
                                  <input type="hidden" name="_method" value="delete">
                                    <button type="submit" class="btn btn-circle red">Delete</button>&nbsp;
                                    <a href="/enquiries/view/corporate" class="btn btn-circle blue">Go Back</a>
                                </form>


                              </div>
                            </div>
                          </div>
                  @endif
                  <br>
                  <br>
                </div>
              </div>

                      <!-- END FORM-->
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- END PAGE CONTENT-->
  </div>
</div>
<!-- END CONTENT -->
@endsection
