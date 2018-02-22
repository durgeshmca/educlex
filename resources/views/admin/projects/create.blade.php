@extends('layouts.admin')
@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <div class="page-content">

    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">
    Projects  <small>Settings</small>
    </h3>
    <div class="page-bar">
      <ul class="page-breadcrumb">
        <li>
          <i class="fa fa-home"></i>
          <a href="/dashboard">Home</a>
          <i class="fa fa-angle-right"></i>
        </li>
        <li>
          <a href="#">Projects</a>
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
            Projects</a>
            </li>

          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_0">
              <div class="portlet box green">
                <div class="portlet-title">
                  <div class="caption">
                    <i class="fa fa-gift"></i>Settings
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
                  <!-- BEGIN FORM-->
                  <form action="/projects/add" class="form-horizontal"  method="post" >
                    {{csrf_field()}}
                    <div class="form-body">
                      <div class="form-group">
                        <label class="col-md-3 control-label">Project Name</label>
                        <div class="col-md-4">
                        <input type="text" name="project" value="{{ old('project') }}" class="form-control input-circle">


                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Project Description</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <textarea name="desc" rows="2" cols="80" class="form-control input-circle">{{ old('desc') }}</textarea>

                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Project Details</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <textarea name="content" rows="20" cols="80" class="form-control input-circle">{{ old('content') }}</textarea>

                          </div>
                        </div>
                      </div>

                    <div class="form-actions">
                      <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                          <button type="submit" class="btn btn-circle blue">Add Project</button>

                        </div>
                      </div>
                    </div>
                  </form>
                  <!-- END FORM-->
                  <br>
                  <br>

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
