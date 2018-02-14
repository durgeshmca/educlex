@extends('layouts.admin')
@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <div class="page-content">


    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">
    Create  <small>New Album</small>
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
          <a href="#">View</a>
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
                      @if(count($forms)>0)


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
  															<span class="font-blue">Image</span>
  															</i>
  														</th>
  														<td >
                                <div class="thumbnail col-sm-3" id='responseImage'>

                                </div>
  														</td>
                            </tr>
                          <tr>
														<th>
															<span class="font-blue">Enquiry Type</span>
														</th>
														<td>
                              <span class="font-blue">{{$forms->enquiry_type}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Name</span>
															</i>
														</th>
														<td>
                              <span class="font-blue">{{$forms->fname.' '.$forms->lname}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Email</span>
														</th>
														<td>
                              <span class="font-blue">{{$forms->email}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Contact No.</span>
															</i>
														</th>
														<td>
                              <span class="font-blue">{{$forms->contact}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Address</span>
														</th>
														<td>
                              <span class="font-blue">{{$forms->addres}}</span>
                              <span class="font-blue">{{$forms->landmark}}</span>
                              <span class="font-blue">{{$forms->city}}</span>
                              <span class="font-blue">{{$forms->state}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Category</span>
															</i>
														</th>
														<td>
                              <span class="font-blue">{{$forms->category}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Highest Qualification</span>
														</th>
														<td>
                              <span class="font-blue">{{$forms->qualification.' '.$forms->year_sem}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Designation</span>
															</i>
														</th>
														<td>
                              <span class="font-blue">{{$forms->Designation}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Company / College</span>
														</th>
														<td>
                              <span class="font-blue">{{$forms->company}}{{$forms->college}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Interested In</span>
															</i>
														</th>
														<td>
                              <span class="font-blue">{{$forms->interests}}</span>
														</td>
                          </tr>
													</tbody>
													</table>
                          <div class="form-actions">
                            <div class="row">
                              <div class="col-md-offset-3 col-md-9">
                                <form class="" action="/enquiries/individual/{{$forms->id}}" method="post">
                                  {{csrf_field()}}
                                  <input type="hidden" name="_method" value="delete">
                                    <button type="submit" class="btn btn-circle red">Delete</button>
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
