@extends('layouts.admin')
@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <div class="page-content">


    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">
    View  <small>Enquiry</small>
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
          <a href="/enquires/view/individual">View</a>
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
                    @include('admin.inc.messages')
                    @if(count($forms)==1)

                    <div class="form-body">
                      <div class="form-group">
                        <label class="col-md-3 control-label">Enquiry Type</label>
                        <div class="col-md-4">
                          <label class="form-control input-circle">{{$forms->enquiry_type}}</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Name</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <label class="form-control input-circle">{{$forms->fname.' '.$forms->lname}}</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Email</label>
                        <div class="col-md-4">
                          <label class="form-control input-circle">{{$forms->email}}</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Contact No.</label>
                        <div class="col-md-4">
                          <label class="form-control input-circle">{{$forms->contact}}</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Address</label>
                        <div class="col-md-4">
                          <label class="form-control input-circle">{{$forms->addres}}</label>
                          <label class="form-control input-circle">{{$forms->landmark}}</label>
                          <label class="form-control input-circle">{{$forms->city}}</label>
                          <label class="form-control input-circle">{{$forms->state}}</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Category</label>
                        <div class="col-md-4">
                          <label class="form-control input-circle">{{$forms->category}}</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Highest Qualification</label>
                        <div class="col-md-4">
                          <label class="form-control input-circle">{{$forms->qualification.' '.$forms->year_sem}}</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Designation</label>
                        <div class="col-md-4">
                          <label class="form-control input-circle">{{$forms->Designation}}</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Company / College </label>
                        <div class="col-md-4">
                          <label class="form-control input-circle">{{$forms->company}}{{$forms->college}}</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Interested In</label>
                        <div class="col-md-4">
                          <label class="form-control input-circle">{{$forms->interest}}</label>
                        </div>
                      </div>

                    <div class="form-actions">
                      <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                          <form class="" action="/enquiries/individual/{{$forms->id}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="delete">
                              <button type="submit" class="btn btn-circle blue">Delete</button>
                          </form>


                        </div>
                      </div>
                    </div>
                
                  <!-- END FORM-->
                  @else
                  <table class="table table-bordered table-striped">
													<thead>
													<tr>
														<th>
															 Form Name
														</th>
														<th>
															 Label
														</th>
														<th>
															 Status
														</th>
														<th>
															 Change
														</th>
														</tr>
													</thead>
													<tbody>
                            @foreach($settings as $form)
                          <tr>
														<td>
															<span class="font-blue">{{$form->form_name}}</span>
														</td>
														<td>
                              <span class="font-blue">{{$form->link_label}}</span>
															<i class="fa fa-user font-blue">
															</i>
														</td>
														<td>
                              <span class="font-blue"><?php if ($form->status): ?>
                                Shown
                              <?php else: ?>
                                Hidden
                              <?php endif; ?></span>
															<i class="icon-pin font-blue">
															</i>
														</td>
														<td>
															<a href="/form/setting/{{$form->id}}" ><i class="glyphicon glyphicon-cog font-blue">
															</i></a>
														</td>
                          </tr>
                          @endforeach
													</tbody>
													</table>

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
