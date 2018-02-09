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
          <a href="#">Album</a>
          <i class="fa fa-angle-right"></i>
        </li>
        <li>
          <a href="#">New Album</a>
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
              Albums </a>
            </li>

          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_0">
              <div class="portlet box green">
                <div class="portlet-title">
                  <div class="caption">
                    <i class="fa fa-gift"></i>Add New Album
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
                  <form action="/albums/store" class="form-horizontal"  method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-body">
                      <div class="form-group">
                        <label class="col-md-3 control-label">Album Name</label>
                        <div class="col-md-4">
                          <input type="text" class="form-control input-circle" placeholder="Enter Album Name Here" name="name">

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Description</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <textarea name="description" rows="5" cols="80" class="form-control input-circle"></textarea>

                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Cover Photo</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="file" class="form-control input-circle-left" placeholder="Cover Image" name="cover_image" accept="image/jpeg,image/gif,image/x-png">
                            <span class="input-group-addon input-circle-right">
                            <i class="fa fa-user"></i>
                            </span>
                          </div>
                        </div>
                      </div>

                    <div class="form-actions">
                      <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                          <button type="submit" class="btn btn-circle blue">Create</button>
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
