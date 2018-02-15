@extends('layouts.admin')
@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <div class="page-content">


    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">
    Industrial Training Enquiry  <small>View</small>
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
          <a href="#">Industrial</a>
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
                      @if(count($industrial)>0)
                      <?php $images =  $industrial->images;?>
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
                              <span class="font-blue">{{$industrial->fname.' '.$industrial->lname}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Email</span>
														</th>
														<td>
                              <span class="font-blue">{{$industrial->email}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Contact No.</span>
															</i>
														</th>
														<td>
                              <span class="font-blue">{{$industrial->contact}}</span>
														</td>
                          </tr>

                          <tr>
														<th>
															<span class="font-blue">College</span>
														</th>
														<td>
                              <span class="font-blue">{{$industrial->college}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Address</span>
														</th>
														<td>
                              <span class="font-blue">{{$industrial->addres}}</span>
                              <span class="font-blue">{{$industrial->landmark}}</span>
                              <span class="font-blue">{{$industrial->city}}</span>
                              <span class="font-blue">{{$industrial->state}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Qualification</span>
														</th>
														<td>
                              <span class="font-blue">{{$industrial->qualification}}</span>
														</td>
                          </tr>
                          tr>
														<th>
															<span class="font-blue">Year / Sem</span>
														</th>
														<td>
                              <span class="font-blue">{{$industrial->year_sem}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Interested In</span>
															</i>
														</th>
														<td>
                              <span class="font-blue">{{$industrial->interests}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Payment Mode</span>
															</i>
														</th>
														<td>
                              <span class="font-blue">{{$industrial->payment_mode}}</span>
														</td>
                          </tr>
                          <tr>
														<th>
															<span class="font-blue">Enquiry Time</span>
														</th>
														<td>
                              <span class="font-blue">{{date('d M Y h:i:s A',strtotime($industrial->created_at))}}</span>
														</td>
                          </tr>



													</tbody>
													</table>
                          <div class="form-actions">
                            <div class="row">
                              <div class="col-md-offset-3 col-md-9">
                                <form class="" action="/enquiries/industrial/{{$industrial->id}}" method="post">
                                  {{csrf_field()}}
                                  <input type="hidden" name="_method" value="delete">
                                    <button type="submit" class="btn btn-circle red">Delete</button>&nbsp;
                                    <a href="/enquiries/view/industrial" class="btn btn-circle blue">Go Back</a>
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
