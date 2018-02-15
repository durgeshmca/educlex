@extends('layouts.admin')
@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <div class="page-content">


    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">
    College Workshop Enquiry  <small>View</small>
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
          <a href="#">College</a>
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
                      @if(count($college)>0)
                      <?php $images =  $college->images;?>
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
                              <span class="font-blue">{{$college->fname.' '.$college->lname}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Email</span>
														</th>
														<td>
                              <span class="font-blue">{{$college->email}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Contact No.</span>
															</i>
														</th>
														<td>
                              <span class="font-blue">{{$college->contact}}</span>
														</td>
                          </tr>

                          <tr>
														<th>
															<span class="font-blue">College</span>
														</th>
														<td>
                              <span class="font-blue">{{$college->college}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Address</span>
														</th>
														<td>
                              <span class="font-blue">{{$college->address}}</span>
                              <span class="font-blue">{{$college->landmark}}</span>
                              <span class="font-blue">{{$college->city}}</span>
                              <span class="font-blue">{{$college->state}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Placement Assistance</span>
														</th>
														<td>
                              <span class="font-blue">{{$college->placement_assistance}}</span>
														</td>
                          </tr>

                          <tr>
														<th>
															<span class="font-blue">Interested In</span>
															</i>
														</th>
														<td>
                              <span class="font-blue">{{$college->interests}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Payment Mode</span>
															</i>
														</th>
														<td>
                              <span class="font-blue">{{$college->payment_mode}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Enquiry Time</span>
														</th>
														<td>
                              <span class="font-blue">{{date('d M Y h:i:s A',strtotime($college->created_at))}}</span>
														</td>
                          </tr>
													</tbody>
													</table>
                          <div class="form-actions">
                            <div class="row">
                              <div class="col-md-offset-3 col-md-9">
                                <form class="" action="/enquiries/college/{{$college->id}}" method="post">
                                  {{csrf_field()}}
                                  <input type="hidden" name="_method" value="delete">
                                    <button type="submit" class="btn btn-circle red">Delete</button>&nbsp;
                                    <a href="/enquiries/view/college" class="btn btn-circle blue">Go Back</a>
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
