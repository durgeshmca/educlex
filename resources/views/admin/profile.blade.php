@extends('layouts.admin')
@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <div class="page-content">

    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">
    Profile  <small>Settings</small>
    </h3>
    <div class="page-bar">
      <ul class="page-breadcrumb">
        <li>
          <i class="fa fa-home"></i>
          <a href="/dashboard">Home</a>
          <i class="fa fa-angle-right"></i>
        </li>
        <li>
          <a href="#">Profile</a>
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
            Company Profile</a>
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
                  <form action="/profile/update" class="form-horizontal"  method="post"  >
                    {{csrf_field()}}
                    <div class="form-body">
                      <div class="form-group">
                        <label class="col-md-3 control-label">Company Name</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="text" name="company_name"  class="form-control input-circle" value="{{ $profile->company_name }}"/>

                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Contact Nos.</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="text" name="contacts"  class="form-control input-circle" value="{{ $profile->contacts }}"/>

                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-3 control-label">Email ID</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="text" name="email"  class="form-control input-circle" value="{{ $profile->email }}"/>

                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Address</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <textarea name="address" rows="5" cols="80" class="form-control input-circle">{{ $profile->address }}</textarea>

                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Name At Footer</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="text" name="footer"  class="form-control input-circle" value="{{ $profile->footer_name }}"/>

                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Facebook Profile Link</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="text" name="facebook_link"  class="form-control input-circle" value="{{ $profile->facebook_link }}"/>

                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Twitter Link</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="text" name="twitter_link"  class="form-control input-circle" value="{{ $profile->twitter_link }}"/>

                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Linked In Link</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="text" name="linked_in"  class="form-control input-circle" value="{{ $profile->linked_in }}"/>

                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Google Profile</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="text" name="google_link"  class="form-control input-circle" value="{{ $profile->google_link }}"/>

                          </div>
                        </div>
                      </div>
                    <div class="form-actions">
                      <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                          <button type="submit" class="btn btn-circle blue">Update Profile</button>

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
