@extends('layouts.admin')
@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
             Widget settings form goes here
          </div>
          <div class="modal-footer">
            <button type="button" class="btn blue">Save changes</button>
            <button type="button" class="btn default" data-dismiss="modal">Close</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

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
          <a href="#">Form</a>
          <i class="fa fa-angle-right"></i>
        </li>
        <li>
          <a href="#">Setting</a>
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
            Form</a>
            </li>

          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_0">
              <div class="portlet box green">
                <div class="portlet-title">
                  <div class="caption">
                    <i class="fa fa-gift"></i>Setting
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
                    @if(count($settings)==1)
                  <!-- BEGIN FORM-->
                  <form action="/form/setting/{{$settings->id}}/store" class="form-horizontal"  method="post" >
                    {{csrf_field()}}
                    <div class="form-body">
                      <div class="form-group">
                        <label class="col-md-3 control-label">Form Name</label>
                        <div class="col-md-4">
                          <label class="form-control input-circle">{{$settings->form_name}}</label>


                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Label</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <textarea name="link_label" rows="5" cols="80" class="form-control input-circle">{{$settings->link_label}}</textarea>

                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Form Status</label>
                        <div class="col-md-4">
                          <div class="radio-list">
												<label class="radio-inline">
												<div class="radio"><input type="radio" name="status" id="optionsRadios25" value="0" <?php if($settings->status==0){ echo "checked='checked'";} ?>></div> Hide </label>
												<label class="radio-inline">
												<div class="radio" ><input type="radio" name="status" id="optionsRadios26" value="1" <?php if($settings->status){ echo "checked='checked'";} ?>></div> Show </label>

											</div>

                        </div>
                      </div>

                    <div class="form-actions">
                      <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                          <button type="submit" class="btn btn-circle blue">Update</button>

                        </div>
                      </div>
                    </div>
                  </form>
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
