@extends('layouts.admin')
@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">
    Upload  <small>New Photo</small>
    </h3>
    <div class="page-bar">
      <ul class="page-breadcrumb">
        <li>
          <i class="fa fa-home"></i>
          <a href="index.html">Home</a>
          <i class="fa fa-angle-right"></i>
        </li>
        <li>
          <a href="#">Album</a>
          <i class="fa fa-angle-right"></i>
        </li>
        <li>
          <a href="#">Upload Photo</a>
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
              Upload New Photo </a>
            </li>

          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_0">
              <div class="portlet box green">
                <div class="portlet-title">
                  <div class="caption">
                    <i class="fa fa-gift"></i>Add New Photo
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
                  <form action="/photos/store" class="form-horizontal"  method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-body">
                      <div class="form-group">
                        <label class="col-md-3 control-label">Album</label>
                        <div class="col-md-4">
                          <select class="form-control input-circle" name="album_id">
                            <option value="0">Select Album</option>
                            @foreach($albums as $album)
                              <option value="{{$album->id}}" <?php if(!empty($album_id) && $album_id==$album->id){ echo "selected=selected";}?>>{{$album->name}}</option>
                            @endforeach
                          </select>

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Title</label>
                        <div class="col-md-4">
                          <input type="text" class="form-control input-circle" placeholder="Photo Title" name="title">

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Description</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <textarea name="description" rows="5" cols="80" class="form-control input-circle" placeholder="Photo Description"></textarea>

                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Upload Photo</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="file" class="form-control input-circle-left" name="photo" accept="image/jpeg,image/gif,image/x-png">
                            <span class="input-group-addon input-circle-right">
                            <i class="fa fa-user"></i>
                            </span>
                          </div>
                        </div>
                      </div>

                    <div class="form-actions">
                      <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                          <button type="submit" class="btn btn-circle blue">Upload</button>
                          <button type="reset" class="btn btn-circle default">Reset</button>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!-- END FORM-->
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
